<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'email' => 'required|max:100|unique:users,email',
            'password' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' =>  'max:15|integer',
            'confirm_password' => 'same:password'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống!',
            'email.unique' => 'Email đã tồn tại!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.max' => 'Mật khẩu tối đa chứa 255 kí tự !',
            'name.required' => 'Họ và tên không được để trống!',
            'name.max' => 'Họ và tên chỉ chứa tối đa 255 kí tự !',
            'address.required' => 'Địa chỉ không được để trống!',
            'phone.integer' => 'Số điện thoại không đúng định dạng',
            'phone.max' => 'Số điện thoại không đúng định dạng',
            'confirm_password.same' => 'Mật khẩu không trùng khớp'
        ];
    }
}
