<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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
            'numero'        => 'required|integer',
            'pot_instalada'       => 'required',
            'pot_disponible'       => 'required',
            'potIndispMtto'       => 'required',
            'potIndispAveria'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'numero.required'     => 'El :attribute es obligatorio.',
            'numero.integer'     => 'El :attribute debe ser un valor entero.',

            'pot_instalada.required'    => 'La :attribute es obligatorio.',
            'pot_disponible.required'    => 'La :attribute es obligatorio.',
            'potIndispMtto.required'    => 'La :attribute es obligatorio.',
            'potIndispAveria.required'    => 'La :attribute es obligatorio.',

        ];
    }
    public function attributes()
    {
        return [
            'numero'        => 'numero del Grupo',
            'pot_instalada'    => 'potencia instalada',
            'pot_disponible'    => 'potencia disponible',
            'potIndispMtto'    => 'potencia estado por mantenimiento',
            'potIndispAveria'    => 'potencia estado por averia',

        ];
    }
}
