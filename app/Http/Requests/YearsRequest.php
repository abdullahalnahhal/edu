<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YearsRequest extends FormRequest
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
            'level_id' => 'required|numeric|exists:levels,id',
            'year' => 'required|string|max:50|min:3',
        ];
    }
    public function messages()
    {
        return [
            'year.required'=>"years.Please Type Year First Can't Save Empty Year ...",
            'year.string'=>"years.Year Must Be String Only ...",
            'year.max'=>"years.Year Name Can't Has More Than 50 Letters ...",
            'year.min'=>"years.Year Name Can't Has Less Than 50 Letters ...",
            'level_id.required'=>'years.Please Select Level From Drop Down Menu',
            'level_id.numeric'=>'years.Please Select Level From Drop Down Menu',
            'level_id.exists'=>'years.Please Select Level From Drop Down Menu',
        ];
    }
}
