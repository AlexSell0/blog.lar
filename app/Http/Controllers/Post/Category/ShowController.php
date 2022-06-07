<?php

namespace App\Http\Controllers\Post\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $data['posts'] = $category->posts()->paginate();
        $data['category'] = $category;

        return view('post.category.show', compact('data'));
    }
}
