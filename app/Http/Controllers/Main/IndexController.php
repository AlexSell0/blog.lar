<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['posts'] = Post::paginate(9);

        return view('main.index', compact('data'));
    }
}
