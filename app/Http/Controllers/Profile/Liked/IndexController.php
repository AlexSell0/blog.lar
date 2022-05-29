<?php

namespace App\Http\Controllers\Profile\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = auth()->user()->postLikes;
        return view('profile.liked.index', compact('data'));
    }
}
