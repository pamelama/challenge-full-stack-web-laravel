<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreUpdateRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|email",
            "academic_registration_number" => "required|numeric|digits:6|unique:students,academic_registration_number,{$this->request->get("id")}",
            "document_number" => "required|numeric|digits:11",
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório',

            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email informado deve ser válido. Ex: nome@provedor.com',

            'academic_registration_number.required' => 'O RA é obrigatório',
            'academic_registration_number.numeric' => 'O RA deve conter apenas números',
            'academic_registration_number.digits' => 'O RA deve conter 6 dígitos',
            'academic_registration_number.unique' => 'Já existe um aluno com o RA informado',

            'document_number.required' => 'O CPF é obrigatório',
            'document_number.numeric' => 'O CPF deve conter apenas números',
            'document_number.digits' => 'O CPF deve conter 11 dígitos'
        ];
    }
}
