<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Post $posts)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact('posts', 'categories', 'tags'));
    }
}
