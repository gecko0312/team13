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
            'id'=>'required|min:1|max:100',
            'bname'=>'required|min:3|max:100',
            'location'=>'required|min:2|max:100',
            'brand_time'=>'nullable|numeric',
            'brand_time'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'id.required'=>'編號 為必填項目',
            'bname.required'=>'廠商名稱 為必填項目',
            'location.required'=>'地區 為必填項目',
            'brand_time.required'=>'成立時間 為必填項目',
        ];
    }

}