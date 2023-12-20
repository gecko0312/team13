<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'bname'=>'required|min:3|max:100',
            'location'=>'required|min:2|max:100',
            'brand_time'=>'nullable|numeric'
        ];
    }

    public function messages()
    {
        return [
            'bname.required'=>'名稱 為必填項目',
            'bname.min'=>'名稱 至少3個字元',
            'bname.max'=>'名稱 最多100個字元',
            'location.required'=>'地區 為必填項目',
            'location.min'=>'地區 至少2個字元',
            'location.max'=>'地區 最多100個字元',
            'brand_time.numeric'=>'成立時間 必須為數字',
        ];
    }
}
