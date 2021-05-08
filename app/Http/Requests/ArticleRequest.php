<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' =>'required|min:6|max:150',
            'subtitle' =>'required|min:6|max:150',
            'content' =>'required|min:6|max:150'
        ];
    }


    public function message()
    {
        return [
            'title' =>'Un titre doit etre renseigner',
            'subtitle' =>'Un Subtitle doit etre renseigner',
            'content' =>'Un content doit etre renseigner'
        ];
    }
}
