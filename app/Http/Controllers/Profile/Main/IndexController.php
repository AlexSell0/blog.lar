<?php

namespace App\Http\Controllers\Profile\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $content = auth()->user();
        $data['likePostsCount'] = $content->post_likes_count;
        $data['PostComment'] = $content->post_comments_count;

        return view('profile.main.index', compact('data'));
    }
}
