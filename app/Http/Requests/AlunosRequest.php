<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunosRequest extends FormRequest
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
            'nome_aluno' => 'required',
            'matricula' => 'required',
            'endereço' => 'required',
            'nome_responsável' => 'required',
            'numero_responsável' => 'required',
            'mensalidade' => 'required'
        ];
    }

    public function messages(): array{
        return[
            'nome_aluno' => 'Campo nome é obrigatório!',
            'matricula' => 'Campo matrícula é obrigatório!',
            'endereço' => 'Campo endereço é obrigatório!',
            'nome_responsável' => 'Campo responsáveis é obrigatório!',
            'numero_responsável' => 'Campo numero responsável é obrigatório!',
            'mensalidade' => 'Campo mensalidade é obrigatório!'

        ];
    }
}
