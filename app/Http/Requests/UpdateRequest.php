<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;

class UpdateRequest extends FormRequest
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
            'titulo' => 'string',
            'autor' => 'string',
            'data_lancamento' => 'date',
            'genero' => 'string',
            'numero_paginas' => 'integer', 
        ];
    }

    public function messages()
    {
        return [
            'titulo.string' => 'O título deve ser uma string.',
            'autor.string' => 'O autor deve ser uma string.',
            'data_lancamento.date' => 'A data de lançamento deve ser uma data válida.',
            'genero.string' => 'O gênero deve ser uma string.',
            'numero_paginas.integer' => 'O número de páginas deve ser um número    inteiro.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
