<?php

namespace App\Http\Requests\PostImages;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'url'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Không được để trống',
        ];
    }
}
