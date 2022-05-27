<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'tags_ids' => 'nullable|array',
            'tags_ids.*' => 'nullable|integer|exists:tags,id',
            'preview_image' => 'nullable|image',
            'main_image' => 'nullable|image'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.string' => "Это поле должно быть строкой",
            'content.required' => 'Это поле обязательно для заполнения',
            'content.string' => "Это поле должно быть строкой",
            'category_id.exists' => 'Выбрана не существующая категория',
            'tags_ids*.integer' => 'Это поле должно быть числовым',
            'tags_ids*.exists' => 'Выбрана несуществующая категория',
            'preview_image.image' => 'Неверный формат изображения',
            'main_image.image' => 'Неверный формат изображения'
        ];
    }

}
