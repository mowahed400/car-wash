<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'carname'=>'required',
            'cartype'=>'required',
            'carbrand'=>'required',
            'color'=>'required',
        ];
    }
        public function messages()
    {
        return[
            'carname.required'=>trans('validation.required'),
            'cartype.required'=>trans('validation.required'),
            'carbrand.required'=>trans('validation.required'),
            'color.required'=>trans('validation.required'),


        ];

    }
}

