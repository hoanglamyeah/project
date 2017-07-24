<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|unique:blogs',
            'title' => 'required|max:255',
            'content' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Required!',
            'url.unique' => 'Sorry, this blog has added',
            'title.required'  => 'Required!',
            'title.max'  => 'Sorry, this title to long',
            'content.required'  => 'Required!',
            'content.max'  => 'Sorry, this desciption to long'
        ];
    }
}
