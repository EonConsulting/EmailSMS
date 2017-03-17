<?php

namespace EONConsulting\PHPStencil\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmsFormValidationRequest extends FormRequest
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

      'to'=>    'required|numeric|min:11',
     // 'from'=>    'required|numeric|',
      'textmessage'=> 'required|min:3'
        ];
    }
}
