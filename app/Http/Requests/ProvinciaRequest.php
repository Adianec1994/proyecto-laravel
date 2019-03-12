<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProvinciaRequest extends FormRequest
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
                 'nombre' => 'required|min:2',
                 'cantidad_centrales' => 'required',
                 'pot_planificada' => 'required',
             ];
    }
    public function messages()
    {
        return [
            'nombre.required'     => 'El :attribute es obligatorio.',
            'nombre.min'          => 'El :attribute debe contener mas de dos caracteres.',

            'cantidad_centrales.required'    => 'La :attribute es obligatoria.',

            'pot_planificada.required'    => 'La :attribute es obligatoria.',
        ];
    }
    public function attributes()
    {
        return [
            'nombre'        => 'nombre de la Provincia',
            'cantidad_centrales'    => 'cantidad de Centrales Electricas',
            'pot_planificada'    => 'potencia planificada',
        ];
    }
}
