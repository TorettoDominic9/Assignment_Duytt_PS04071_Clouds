<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product_updateRequest extends FormRequest
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
        'txtproductname' => 'required',
        
        'txtprice' => 'required',
        'sltParent' => 'required'
        
        


        
        ];
    }
    public function messages(){
        return[
        'sltParent.required' => 'Please choose category',
        'txtproductname.required' => 'Please enter product name!!!',
        
        'txtprice.required'=>'Please enter price',
        
    ];
    }
}
