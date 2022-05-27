<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $posts)
    {
        $posts->delete();

        return redirect()->route('admin.posts.index');
    }
}

