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
            // 'hours' => 'required',
            'cost' => 'required',
            'discount' => 'required|nullable|numeric',
            // 'start_at' => 'required',
            // 'end_at' => 'required',
            'zoom_link' => 'sometimes',
            'photo' => 'required_without:hidden_update|image|mimes:jpg,jpeg,png|max:1024',
        ];
    }
    public function messages()
    {
        return [
            'required' => __('courses.required'),
            'required_without' => __('courses.required'),
            'required_if' => __('courses.required'),
            'in' => __('courses.in'),
            'image' => __('courses.image'),
            'mimes' => __('courses.mimes'),
            'max' => __('courses.image_max'),
            'photo.required' => __('courses.photo_required'),
            'numeric' => __('courses.numeric'),
        ];
    }
}
