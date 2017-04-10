<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required|min:3',
            'avatar' => 'image|max:255',
            'photo_cover' => 'image|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('profile.error.name_require'),
            'name.min' => trans('profile.error.name_min'),
            'avatar.image' => trans('profile.error.not_image'),
            'avatar.max' => trans('profile.error.big_size'),
            'photo_cover.image' => trans('profile.error.not_image'),
            'photo_cover.max' => trans('profile.error.big_size'),
        ];
    }
}
