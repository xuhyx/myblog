<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticlePostReques extends Request
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
            'title' => 'required',
            'descr' => 'required|string:100',
            'content' => 'required',
            'picture' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '文章标题不能为空',
            'descr.required'  => '文章简介不能为空',
            'descr.string'  => '文章简介字数不能多于100字',
            'content.required'  => '文章内容不能为空',
            'picture.required'  => '文章配图不能为空',
            'picture.image'  => '文章配图只支持jpg,jpeg,png,gif格式',
        ];
        
    }
}
