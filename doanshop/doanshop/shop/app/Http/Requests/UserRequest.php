<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtusername' => 'required|unique:users,name',
            'pass' => 'required',
            'txtemail' => 'required'
        ];
    }
    public function messages(){
        return[
        'txtusername.required' => 'Hãy nhập vào Username của bạn!!!',
        'txtusername.unique' => 'Username này đã có người sử dụng!!!',
        'pass.required' => 'Hãy nhập vào password của bạn!!!',
        'txtemail.required' => 'Hãy nhập vào <b>Email</b> của bận!!!'
        
        ];

    }
}
