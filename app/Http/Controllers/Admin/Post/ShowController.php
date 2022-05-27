<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends BaseController
{
    public function __invoke(Post $posts)
    {
        $tags = Tag::all();

        $categories = Category::find($posts['category_id']);

        if($categories !== null){
            $categories = $categories->title;
        }else{
            $categories = '';
        }

        return view('admin.posts.show', compact('posts', 'tags', 'categories'));
    }
}
