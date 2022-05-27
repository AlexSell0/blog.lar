<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Tag $tags)
    {
        return view('admin.tags.show', compact('tags'));
    }
}
