<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'name'=>'required',
            'password'=>'required',
            'avatar'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
    public function messages()
    {
        return[
            'required'=>':attribute không được để trống',
            'email'=>':attribute không đúng định dạng',
            'image'=>':attribute không phải là ảnh',
            'mimes'=>':attribute phải định dạng jpeg,png,jpg,gif',
            'max'=>':attribute quá kích thước'
        ];
    }
    public function attributes()
    {
        return [
            'email'=>'Email',
            'name'=>'Tên',
            'password'=>'Mật khẩu',
            'avatar'=>'Ảnh đại diện'
        ];
    }
}
