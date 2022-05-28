<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Jobs\StoreUserJop;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if((int)$data['role'] != User::ROLE_ADMIN and (int)$data['role'] != User::ROLE_USER){
            $data['role'] = 1;
        }

        //Здесь отрабатывает класс очереди
        StoreUserJop::dispatch($data);

        return redirect()->route('admin.user.store');
    }
}
