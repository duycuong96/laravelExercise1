<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|min:2',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:5',
            'password_confirmation'=> 'required|same:password'

        ];
    }
    public function messages(){
        return [
            'name.required'     => 'Tên không được để trống',
            'name.min'          => 'Tên quá ngắn',
            'email.required'    => 'email không được để trống',
            'email.email'       => 'email không đúng định dạng',
            'email.unique'      => 'email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu quá ngắn',
            'password_confirmation.required' => 'Mật khẩu không được để trống',
            'password_confirmation.same' => 'Mật khẩu không trùng khớp'
        ];
    }
}
