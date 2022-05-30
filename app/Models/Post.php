<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function likesPosts(){
        return $this->belongsToMany(Post::class, 'post_user_likes', 'post_id', 'user_id');
    }

    public  function commentsPost(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public  function relatedPost(){
        return $this->hasMany(Post::class, 'category_id', 'category_id')->where('id', '!=', 'id')->take(3);
    }
}
