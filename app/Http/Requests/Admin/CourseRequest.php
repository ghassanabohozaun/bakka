<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required_if:site_lang_en,on',
            'description_ar' => 'required',
            'description_en' => 'required_if:site_lang_en,on',
            'hours' => 'required',
            'cost' => 'required',
            'discount' => 'required|nullable|numeric',
            'start_at' => 'required',
            'end_at' => 'required',
            'zoom_link' => 'sometimes',
            'photo' => 'required_without:hidden_update|image|mimes:jpg,jpeg,png|max:1024',
        ];
    }
    public function messages()
    {
        return [
            'required' => trans('courses.required'),
            'required_without' => trans('courses.required'),
            'required_if' => trans('courses.required'),
            'in' => trans('courses.in'),
            'image' => trans('courses.image'),
            'mimes' => trans('courses.mimes'),
            'max' => trans('courses.image_max'),
            'photo.required' => trans('courses.photo_required'),
            'numeric' => trans('courses.numeric'),
        ];
    }
}
