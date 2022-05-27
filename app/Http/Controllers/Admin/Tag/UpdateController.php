<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tags)
    {
        $data = $request->validated();
        $tags->update($data);

        return view('admin.tags.show', compact('tags'));
//        return redirect()->route('admin.tags.show', $tags);
    }
}

