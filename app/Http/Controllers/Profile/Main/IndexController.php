<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::All()->count();
        $data['postsCount'] = Post::All()->count();
        $data['categoriesCount'] = Category::All()->count();
        $data['tagsCount'] = Tag::All()->count();
        return view('admin.main.index', compact('data'));
    }
}
