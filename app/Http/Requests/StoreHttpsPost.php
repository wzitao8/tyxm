<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHttpsPost extends FormRequest
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
            'http_name' => [
                'required',
                'regex:/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u',
                'unique:https',
            ],
            'http_act' => [
                'required',
                'regex:/^((https|http|ftp|rtsp|mms){0,1}(:\/\/){0,1})www\.(([A-Za-z0-9-~]+)\.)+([A-Za-z0-9-~\/])+$/'
            ],
            'http_ren' => 'required',
            'http_count' => 'required',
        ];
    }

    public function messages(){
         return [
            'http_name.required' => '网站名称不能为空',
            'http_name.unique'=>'网站已存在',
            'http_name.regex'=>'网站名必须以字母,数字中文下划线开头',
            'http_act.required'=>'网站网址不能为空',
            'http_act.regex'=>'网站网址格式不正确',
            'http_ren.required'=>'网站联系人不能为空',
            'http_count.required'=>'网站内容不能为空',
         ];
    }
}
