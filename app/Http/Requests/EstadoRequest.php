<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipo'        => 'required|min:4',
            'potencia'    => 'required'
        ];
    }
    public function messages()
    {
        return [
            'tipo.required'     => 'El :attribute es obligatorio.',
            'tipo.min'          => 'El :attribute debe contener mas de 4 caracteres.',
            'potencia.required' => 'La :attribute es un campo obligatorio',
        ];
    }
    public function attributes()
    {
        return [
            'tipo'        => 'tipo de indisponibilidad',
            'potencia'    => 'potencia',

        ];
    }
}
