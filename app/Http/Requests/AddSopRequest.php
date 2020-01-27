<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:10',
            'address_temp' => 'required',
        ];
    }

    /*
    //call before form-valdiation rules//
    public function withValidator($validator)
    {
        //dd($validator);
        $validator->after(function ($validator) {
            //if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('c_name', 'Something is wrong with this field!');
            //}

        });
    }
    */

   /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'A Name(EVS) is required' ,
            'name.min' => 'A Name(EVS) with MIN is required'        
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'address_temp' => 'Temporary Address of (EVS)',
        ];
    }
}
