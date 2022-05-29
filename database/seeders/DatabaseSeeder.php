<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)->create();
        Tag::factory(15)->create();
        Post::factory(50)->create();
        PostTag::factory(30)->create();
        User::factory(30)->create();
        Comment::factory(30)->create();
        PostUserLike::factory(120)->create();
    }
}
