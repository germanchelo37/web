<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialeRequest extends FormRequest
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
			'titulo' => 'required|string',
			'subtitulo' => 'string',
			'isbn' => 'required|string',
			'año_publicacion' => 'required',
			'estado' => 'required',
			'tipo' => 'required|string',
			'numero_paginas' => 'required',
			'autor_id' => 'required',
			'editorial_id' => 'required',
			'categoria_id' => 'required',
        ];
    }
}
