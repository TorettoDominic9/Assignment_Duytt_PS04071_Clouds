<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'txtname' => 'required|unique:cates,name',
            'txtorder' => 'required',
            'txtkeywords' => 'required',
            'txtdescription' => 'required'
        ];
    }

    public function messages(){
        return[
        'txtname.required' => 'Pleale enter category name!!!',
        'txtname.unique' => 'This name category is exist!!!',
        'txtorder.required' => 'Pleale enter category order!!!',
        'txtkeywords.required' => 'Pleale enter category keywords!!!',
        'txtdescription.required' => 'Pleale enter category decsription!!!'
        ];

    }
}
