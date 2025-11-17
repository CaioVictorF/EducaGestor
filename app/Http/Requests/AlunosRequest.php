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
            'nome' => 'required',
            'matricula' => 'required',
            'endereco' => 'required',
            'transtornos' => 'required',
            'nome_responsavel' => 'required',
            'numero_responsavel' => 'required',
            'mensalidade' => 'required'
        ];
    }

    public function messages(): array{
        return[
            'nome' => 'Campo nome é obrigatório!',
            'matricula' => 'Campo matrícula é obrigatório!',
            'endereco' => 'Campo endereço é obrigatório!',
            'transtornos' => 'Campo transtornos é obrigatório!',
            'nome_responsavel' => 'Campo responsável é obrigatório!',
            'numero_responsavel' => 'Campo numero responsável é obrigatório!',
            'mensalidade' => 'Campo mensalidade é obrigatório!'

        ];
    }
}
