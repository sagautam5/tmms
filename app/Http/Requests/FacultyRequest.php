<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacultyRequest extends FormRequest
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
            //
            'name' => 'required',
        ];
    }

    /**
     * Get the error messages if validation fails
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'faculty name is required',
        ];
    }
}
