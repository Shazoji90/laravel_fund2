<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        // Rule::unique(table,field);
        $rule_task_unique = Rule::unique('tasks', 'task');
        // Apabila method yg digunakan validasi bukan POST maka akan mengabaikan rules unique
        if($this->method() !== 'POST') {
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'task' => [ 'required', $rule_task_unique],
            'user' =>  'required|alpha_num' ,
        ];
    }

    public function messages()
    {
        return[
            'required' => 'isian :attribute harus diisi',
            'user.required' => 'nama pengguna harus diisi',
            'task.unique' => 'isian :attribute terdapat duplikasi'
        ];
    }
}
