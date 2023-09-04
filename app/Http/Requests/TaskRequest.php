<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'task' => [ 'required' ],
            'user' =>  'required|alpha_num' ,
        ];
    }

    public function messages()
    {
        return[
            'required' => 'isian :attribute harus diisi',
            'user.required' => 'nama pengguna harus diisi'
        ];
    }
}
