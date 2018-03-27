<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
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
            'nickname' => 'required|unique:users,nickname',
            'password' => 'required',
            'password2' => 'required|same:password',
            'telphone' => 'required|digits:11',
            'auth' => 'required',
            'picture' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'nickname.required' => '用户名不能为空',
            'nickname.unique' => '用户名已存在',
            'password.required'  => '密码不能为空',
            'password2.required'  => '重新输入密码不能为空',
            'password2.same'  => '两次密码输入不同',
            'telphone.required'  => '手机号不能为空',
            'telphone.digits'  => '手机号格式错误',
            'auth.required'  => '用户权限需选择',
            'picture.required'  => '头像必须上传',
            'picture.image'  => '文章配图只支持jpg,jpeg,png,gif格式',
        ];
        
    }
}
