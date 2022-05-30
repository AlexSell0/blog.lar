<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(User $user)
    {
//        $user->postComments;
        foreach ($user->postComments as $comment){
            $comment->delete();
        }

        foreach ($user->postLike as $like){
            $like->delete();
        }

        $user->delete();

        return redirect()->route('admin.user.index');
    }
}

