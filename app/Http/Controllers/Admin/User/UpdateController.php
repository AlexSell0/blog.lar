<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if((int)$data['role'] != User::ROLE_ADMIN and (int)$data['role'] != User::ROLE_USER){
            $data['role'] = 1;
        }

        $user->update($data);

        return redirect()->route('admin.user.show', $user);
    }
}

