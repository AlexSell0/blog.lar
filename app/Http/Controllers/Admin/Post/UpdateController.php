<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $posts)
    {
        $data = $request->validated();

        $posts = $this->service->update($data, $posts);

        $tags = $posts->tags;

        $categories = $posts->categories;

        if($categories !== null){
            $categories = $categories->title;
        }else{
            $categories = '';
        }

        return view('admin.posts.show', compact('posts', 'tags', 'categories'));
    }
}

