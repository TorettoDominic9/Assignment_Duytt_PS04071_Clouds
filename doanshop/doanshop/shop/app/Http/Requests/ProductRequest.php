<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        'txtproductname' => 'required|unique:products,name',
        'FImages' => 'required',
        'txtprice' => 'required',
        'sltParent' => 'required'
        
        


        
        ];
    }
    public function messages(){
        return[
        'sltParent.required' => 'Please choose category',
        'txtproductname.required' => 'Please enter product name!!!',
        'txtproductname.unique' => 'This name product is exist',
        'txtprice.required'=>'Please enter price',
        'FImages.required'=>'Please choose images'
    ];
    }
}
