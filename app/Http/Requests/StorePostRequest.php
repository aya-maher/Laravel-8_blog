<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required', 'min:3','unique:posts','string'],
            'description' => ['required', 'min:10','string']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'title is required ',
            'title.min' => 'override the min',
        ];
    }

}
