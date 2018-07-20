<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required|in:M,F,O',
            'phone' => 'required|min:10|numeric',
            'email' => 'required|email|unique:teachers',
            'address' => 'required',
            'date_of_birth' => 'required|date|date_format:Y-m-d',
            'nationality_id' => 'required',
            'faculty_id' => 'required',
            'module_id' => 'required',
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
            'name.required' => 'module name is required',
            'gender.required' => 'gender is required',
            'gender.in' => 'please enter valid gender',
            'phone.required' => 'phone is required',
            'phone.min' => 'please enter at least 10 digits',
            'phone.numeric' => 'please enter valid phone number',
            'email.required' => 'email is required',
            'email.email' => 'please enter valid email address',
            'email.unique' => 'email address must be unique',
            'address.required' => 'address is required',
            'date_of_birth.required' => 'data of birth is required',
            'date_of_birth.date' => 'please enter valid date',
            'date_of_birth.required' => 'please enter date in Y-m-d format',
            'nationality_id.required' => 'nationality is required',
            'faculty_id.required' => 'please select faculty',
            'module_id.required' => 'please select module',
        ];
    }
}
