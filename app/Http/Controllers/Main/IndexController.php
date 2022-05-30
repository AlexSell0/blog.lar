<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['posts'] = Post::paginate(9);

        $data['postRandom'] = Post::get()->random(4);
        $data['likesPosts'] = Post::withCount('likesPosts')->orderBy('likes_posts_count', 'desc')->take(5)->get();

        $data['postRandom'] = Post::get()->random(4);
        $data['likesPosts'] = Post::withCount('likesPosts')->orderBy('likes_posts_count', 'desc')->take(5)->get();

        return view('main.index', compact('data'));
    }
}
