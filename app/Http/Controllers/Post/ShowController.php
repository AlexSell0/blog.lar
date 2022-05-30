<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $post['createDate'] = Carbon::parse($post->created_at)->translatedFormat('d F Y H:i');

        return view('post.show', compact('post'));
    }
}
