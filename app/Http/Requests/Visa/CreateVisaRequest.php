<?php

namespace App\Http\Requests\Visa;

use Illuminate\Foundation\Http\FormRequest;

class CreateVisaRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required',
            'street' => 'required',
            'profession' => 'required',
            'destination' => 'required',
            'maritalstatus' => 'required',
            'civility' => 'required',
            'typevisa' => 'required',
            'country' => 'required',
        ];
    }
}
