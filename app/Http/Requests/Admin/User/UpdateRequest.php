<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user_id,
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя',
            'name.string' => 'Неверное имя',
            'name.max' => 'Неверное имя',
            'email.required' => 'Введите e-mail',
            'email.string' => 'Неверный e-mail',
            'email.email' => 'Неверный e-mail',
            'email.max' => 'Неверный e-mail',
            'email.unique' => 'Пользователь с данным e-mail уже существует',
            'role.required' => 'Выберите роль',
            'role.integer' => 'Неверная роль',
        ];
    }
}
