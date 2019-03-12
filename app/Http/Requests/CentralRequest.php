<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CentralRequest extends FormRequest
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
            'nombre'        => 'required|min:1|max:75',
            'cantidad_baterias'       => 'required|integer',
            'potIndispTM'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required'     => 'El :attribute es obligatorio.',
            'nombre.min'          => 'El :attribute debe contener mas de un caracter.',
            'nombre.max'          => 'El :attribute debe contener max 75 caracteres.',

            'cantidad_baterias.required'    => 'La :attribute es obligatoria.',
            'cantidad_baterias.integer'     => 'La :attribute debe ser un entero.',

            'potIndispTM.required'    => 'La :attribute es obligatoria.',

        ];
    }
    public function attributes()
    {
        return [
            'nombre'        => 'nombre de la Central Electrica',
            'cantidad_baterias'    => 'cantidad de baterias',
            'potIndispTM'    => 'potencia indisponible por Telemecanica',
        ];
    }
}
