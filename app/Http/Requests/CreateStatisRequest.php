<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStatisRequest extends FormRequest
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
            'category' => 'required|string|min:2|max:64',
            'subcategory' => 'required|string|min:1',
            'sample_size' => 'required|numeric|min:1',
            'very_satisfied_pct' => 'required|numeric|min:0.01|max:100.00',
            'satisfied_pct' => 'required|numeric|min:0.01|max:100.00',
            'neutral_pct' => 'required|numeric|min:0.01|max:100.00',
            'dissatisfied_pct' => 'required|numeric|min:0.01|max:100.00',
            'very_dissatisfied_pct' => 'required|numeric|min:0.01|max:100.00'
        ];
    }

    public function messages()
    {
        return[
            'category.required' => '統計項目 必填',
            'category.min' => '統計項目 至少2個字元',
            'subcategory.required' => '細項 必填',
            'subcategory.min' => '細項 至少需要一個字元',
            'sample_size.required' => '樣本數(人) 必填',
            'sample_size.min' => '樣本數(人) 必須為1以上的整數',
            'very_satisfied_pct.required' => '很滿意(%) 必填',
            'very_satisfied_pct.min' => '很滿意(%) 範圍必續介於0.01~100.00',
            'very_satisfied_pct.max' => '很滿意(%) 範圍必續介於0.01~100.00',
            'satisfied_pct.required' => '滿意(%) 必填',
            'satisfied_pct.min' => '滿意(%) 範圍必續介於0.01~100.00',
            'satisfied_pct.max' => '滿意(%) 範圍必續介於0.01~100.00',
            'neutral_pct.required' => '普通(%) 必填',
            'neutral_pct.min' => '普通(%) 範圍必續介於0.01~100.00',
            'neutral_pct.max' => '普通(%) 範圍必續介於0.01~100.00',
            'dissatisfied_pct.required' => '不滿意(%) 必填',
            'dissatisfied_pct.min' => '不滿意(%) 範圍必續介於0.01~100.00',
            'dissatisfied_pct.max' => '不滿意(%) 範圍必續介於0.01~100.00',
            'very_dissatisfied_pct.required' => '很不滿意(%) 必填',
            'very_dissatisfied_pct.min' => '很不滿意(%) 範圍必續介於0.01~100.00',
            'very_dissatisfied_pct.max' => '很不滿意(%) 範圍必續介於0.01~100.00'
        ];
    }
}
