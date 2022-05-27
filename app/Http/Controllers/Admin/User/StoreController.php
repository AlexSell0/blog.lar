<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if((int)$data['role'] != User::ROLE_ADMIN and (int)$data['role'] != User::ROLE_USER){
            $data['role'] = 1;
        }

        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate($data);

        return redirect()->route('admin.user.store');
    }
}
