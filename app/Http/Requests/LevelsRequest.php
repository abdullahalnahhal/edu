<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelsRequest extends FormRequest
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
            'level' => 'required|string|max:50|min:3',
        ];
    }
    public function messages()
    {
        return [
            'level.required'=>"level.Please Type Level First Can't Save Empty Level ...",
            'level.string'=>"level.Level Must Be String Only ...",
            'level.max'=>"level.Level Name Can't Has More Than 50 Letters ...",
            'level.min'=>"level.Level Name Can't Has Less Than 50 Letters ...",
        ];
    }
}
