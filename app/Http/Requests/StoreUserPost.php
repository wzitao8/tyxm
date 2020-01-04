<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\StoreUserPost;
class StoreUserPost extends FormRequest
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
            'name' => [
                'required',
                'regex:/^[A-Za-z0-9_\x{4e00}-\x{9fa5}]+$/u',
                Rule::unique('user')->ignore(request()->user_id,'user_id');
            ],
            'pwd' => 'sometimes|required',
            'email' => 'required|email',
            'head' => 'required',
        ];
    }
    public function messages(){
         return [
            'name.required' => '用户名不能为空',
            'name.unique'=>'用户名已经注册过',
            'name.regex'=>'用户名必须以字母,数字中文下划线开头',
            'pwd.required' =>'密码不能为空',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'head.required'=>'图片必填'
         ];
    }

}
