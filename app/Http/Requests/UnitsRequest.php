<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitsRequest extends FormRequest
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
            'term_id' => 'required|numeric|exists:terms,id',
            'subject_id' => 'required|numeric|exists:subjects,id',
            'unit' => 'required|string|max:50|min:3',
        ];
    }
    public function messages()
    {
        return [
            'unit.required'=>"years.Please Type Subject First Can't Save Empty Subject ...",
            'unit.string'=>"years.Subject Must Be String Only ...",
            'unit.max'=>"years.Subject Name Can't Has More Than 50 Letters ...",
            'unit.min'=>"years.Subject Name Can't Has Less Than 50 Letters ...",

            'level_id.required'=>'years.Please Select Level From Drop Down Menu',
            'level_id.numeric'=>'years.Please Select Level From Drop Down Menu',
            'level_id.exists'=>'years.Please Select Level From Drop Down Menu',

            'year_id.required'=>'years.Please Select Year From Drop Down Menu',
            'year_id.numeric'=>'years.Please Select Year From Drop Down Menu',
            'year_id.exists'=>'years.Please Select Year From Drop Down Menu',

            'term_id.required'=>'years.Please Select Term From Drop Down Menu',
            'term_id.numeric'=>'years.Please Select Term From Drop Down Menu',
            'term_id.exists'=>'years.Please Select Term From Drop Down Menu',

            'subject_id.required'=>'years.Please Select Subject From Drop Down Menu',
            'subject_id.numeric'=>'years.Please Select Subject From Drop Down Menu',
            'subject_id.exists'=>'years.Please Select Subject From Drop Down Menu',
        ];
    }
}
