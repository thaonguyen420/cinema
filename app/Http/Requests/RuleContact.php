<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class RuleContact extends FormRequest

{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
     }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
          'name' => ['required', 'string', 'min:3'],
          'email' => 'Email|ends_with:@gmail.com',
          'content' => ['required'],
        ];
     }
     public function messages() {
        return [

          'name.required'=> 'Chưa nhập họ tên bạn ơi',
          'name.min' => 'Họ tên ngắn quá',
          'email.email' =>' Nhập email đi bạn',
          'email.unique' =>' Đã có người dùng email này',
          'email.ends_with' => ':attribute là phải @gmail.com',
          'content.required'=>'Chưa nhập nội dung bạn ơi'

        ];
      }
      
}
