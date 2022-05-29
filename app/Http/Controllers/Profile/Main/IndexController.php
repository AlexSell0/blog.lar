<?php

namespace App\Http\Controllers\Profile\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['likePostsCount'] = (auth()->user()->postLikes->count());
        $data['PostComment'] = (auth()->user()->postComments->count());

        return view('profile.main.index', compact('data'));
    }
}
