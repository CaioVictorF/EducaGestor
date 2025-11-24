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
            'nome.required' => 'Campo nome é obrigatório!',
            'matricula.required' => 'Campo matrícula é obrigatório!',
            'endereco.required' => 'Campo endereço é obrigatório!',
            'transtornos.required' => 'Campo transtornos é obrigatório!',
            'nome_responsavel.required' => 'Campo responsável é obrigatório!',
            'numero_responsavel.required' => 'Campo número responsável é obrigatório!',
            'mensalidade.required' => 'Campo mensalidade é obrigatório!',
        ];
    }
}
