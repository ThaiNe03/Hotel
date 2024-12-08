<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class RentalDatailRequest extends FormRequest
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
            'id_room'     => 'required|exists:rooms,id',
            'date'          =>   'required',
            'status'   => 'required|boolean',
            'note'               => 'required|nullable',
        ];
    }

    public function messages()
    {
        return [
            'id_room.*'        => 'Id không được để trống',
            'date.*'    => 'Ngày không được để trống',
            'status.*'    => 'Tình trạng không được để trống',
            'img.*'            => 'Hình ảnh không được để trống',
        ];
    }
}
