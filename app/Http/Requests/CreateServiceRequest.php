<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            'name' => 'required',
            'plan' => 'required',
            'price' => 'required',
            'billing_date' => 'required',
            'info_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'サービス名を入力してください',
            'plan.required' => 'プランを選択してください',
            'price.required' => '料金を入力してください',
            'billing_date.required' => '請求日を選択してください',
            'info_date.required' => 'お知らせ日を選択してください',
        ];
    }
}
