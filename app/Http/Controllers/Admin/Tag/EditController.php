<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tags)
    {
        return view('admin.tags.edit', compact('tags'));
    }
}
