<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ScoreRequest extends Request
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
            'name' => "required|string|min:2",
            'score' => "required|numeric|min:0",
            'twitter' => "unique:scores"
        ];
    }
}
