<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name_ar' => 'required',
            'name_en' => 'required',
            //'password' => 'required_without:hidden_update|min:6',
            'mobile' => 'required',
            //'email' => 'required|email|unique:students',
            'whatsapp' => 'required',
            'gender' => 'required|in:male,female',
            //'photo' => 'required_without:hidden_update||image|mimes:png,jpg,jpeg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'required' => __('students.required'),
            'required_without' => __('students.required'),
            'in' => __('students.in'),
            'email.unique' => __('students.email_unique'),
            'email.email' => __('students.email_email'),
            'password.min' => __('students.min'),
            'photo.image' => __('students.image'),
            'photo.required' => __('students.photo_required'),
            'photo.mimes' => __('students.mimes'),
            'photo.max' => __('students.image_max'),
        ];
    }
}
