<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = Tag::all();
        return view('admin.tags.index', compact('data'));
    }
}
