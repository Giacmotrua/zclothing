<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostUser extends FormRequest
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
            'name' => 'required|max:200',
            'email' => 'required|max:200|unique:users,name,'.$this->id,
            'phone' => ['required' ,'regex:/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/'],
            'address' => 'max:200'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'name.max' => 'Tên quá dài',
            'email.required' => 'Email không được bỏ trống',
            'email.max' => 'Email quá dài',
            'email.unique' => 'Email đã tồn tại',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'address.max' => 'Địa chỉ quá dài'
        ]; // TODO: Change the autogenerated stub
    }
}
