<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFiles extends FormRequest
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
          //    'file'=>'between:100000,150000',
        //  'file'=>'max:100',
              //  'file'=>'between:1,150000',
                  'email'=>'required|string|email|max:255',
        ];
    }
}
