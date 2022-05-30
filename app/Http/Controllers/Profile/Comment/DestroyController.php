<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        dd($comment);

        $comment->delete();

        return redirect()->route('profile.comment.index');
    }
}

