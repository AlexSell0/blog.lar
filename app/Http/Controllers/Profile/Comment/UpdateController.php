<?php

namespace App\Http\Controllers\Profile\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();

        $comment->update($data);

        return redirect()->route('profile.comment.index');
//        return redirect()->route('admin.categories.show', $categories);
    }
}

