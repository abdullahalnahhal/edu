<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermsRequest extends FormRequest
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
            'year_id' => 'required|numeric|exists:years,id',
            'term' => 'required|string|max:50|min:3',
        ];
    }
    public function messages()
    {
        return [
            'term.required'=>"years.Please Type Term First Can't Save Empty Term ...",
            'term.string'=>"years.Term Must Be String Only ...",
            'term.max'=>"years.Term Name Can't Has More Than 50 Letters ...",
            'term.min'=>"years.Term Name Can't Has Less Than 50 Letters ...",
            'level_id.required'=>'years.Please Select Level From Drop Down Menu',
            'level_id.numeric'=>'years.Please Select Level From Drop Down Menu',
            'level_id.exists'=>'years.Please Select Level From Drop Down Menu',
            'year_id.required'=>'years.Please Select Year From Drop Down Menu',
            'year_id.numeric'=>'years.Please Select Year From Drop Down Menu',
            'year_id.exists'=>'years.Please Select Year From Drop Down Menu',
        ];
    }
}
