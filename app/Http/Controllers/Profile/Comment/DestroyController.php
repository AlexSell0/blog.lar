<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        dd($comment);
        return view('profile.comment.edit', compact('comment'));
    }
}
