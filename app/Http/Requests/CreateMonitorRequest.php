<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMonitorRequest extends FormRequest
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
            'product_model'=>'required|string|min:3|max:100',
            'bid'=>'required',
            'size'=>'required|numeric',
            'nits'=>'nullable|numeric',
            'nits'=>'required',
            'hz'=>'required|numeric',
            'panel'=>'nullable|string|min:2|max:100',
            'speaker'=>'nullable|boolean',
            'speaker'=>'required',
            'resolution'=>'required|string|min:9|max:100',
            'price'=>'nullable|numeric',
            'price'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'product_model.required'=>'產品名稱 為必填項目',
            'product_model.min'=>'產品名稱 至少3個字元',
            'product_model.max'=>'產品名稱 至多100個字元',
            'bid.required'=>'產牌 為必填項目',
            'size.required'=>'尺寸 為必填項目',
            'size.numeric'=>'尺寸 必須為數字',
            'nits.numeric'=>'亮度 必須為數字',
            'hz.required'=>'更新率 為必填項目',
            'hz.numeric'=>'更新率 必須為數字',
            'panel.min'=>'面板 至少2個字元',
            'panel.max'=>'面板 至多100個字元',
            'speaker.boolean'=>'喇叭 必須為布林值',
            'resolution.required'=>'解析度 為必填項目',
            'resolution.min'=>'解析度 至少9個字元',
            'resolution.max'=>'解析度 最多100個字元',
            'price.numeric'=>'價錢 必須為數字',
            'nits.required'=>'亮度 為必填項目',
            'speaker.required'=>'喇叭為必填項目',
            'price.required'=>'價格為必填項目',
            
        ];
    }
}
