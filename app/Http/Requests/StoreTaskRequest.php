<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required'
            ],
            'content' => [
                'string',
                'required'
            ],
        ];
    }
}