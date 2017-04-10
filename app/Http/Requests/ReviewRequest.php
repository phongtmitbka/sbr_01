<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'caption' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'caption.required' => trans('review.error.caption-require'),
            'content.required' => trans('review.error.content-require'),
        ];
    }
}
