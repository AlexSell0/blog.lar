<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['comments'] = auth()->user()->postComments;
        $data['post'] = auth()->user()->postTitle;

        return view('profile.comment.index', compact('data'));
    }
}
