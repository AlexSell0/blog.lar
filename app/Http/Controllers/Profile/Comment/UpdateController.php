<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $categories)
    {
        $data = $request->validated();
        $categories->update($data);

        return view('admin.categories.show', compact('categories'));
//        return redirect()->route('admin.categories.show', $categories);
    }
}

