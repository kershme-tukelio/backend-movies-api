<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|unique|string',
            'director' => 'required|string',
            'duration' => 'required|integer|between:1,500',
            'imageUrl' => 'required|url',
            'release_date' => 'required|date',
            'genre' => 'required|string'
        ];
    }
}
