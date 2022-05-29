<?php

namespace App\Http\Controllers\Profile\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->postLikes()->detach($post);

        return redirect()->route('profile.liked.index');
    }
}

