<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'pass' => 'required|min:6|max:32',
            'repass' => 'required|same:pass'
        ];
    }

    public function messages()
    {
        return [
            'pass.required' => trans('profile.error.pass_require'),
            'pass.min' => trans('profile.error.pass_min'),
            'pass.max' => trans('profile.error.pass_max'),
            'repass.required' => trans('profile.error.repass_require'),
            'repass.same' => trans('profile.error.repass_same')
        ];
    }
}
