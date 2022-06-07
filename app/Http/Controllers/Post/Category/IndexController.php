<?php

namespace App\Http\Controllers\Post\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['categories'] = Category::all();
        return view('post.category.index', compact('data'));
    }
}
