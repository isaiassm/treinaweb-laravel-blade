<?php

namespace App\Http\Requests;

use illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'content' => ['required']
        ];
    }

}
