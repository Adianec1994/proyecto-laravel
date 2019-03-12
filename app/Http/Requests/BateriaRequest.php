<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BateriaRequest extends FormRequest
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
            'numero'                => 'required|integer',
            'cantidad_grupos'       => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'numero.required'             => 'El :attribute es obligatorio.',
            'numero.integer'              => 'El :attribute debe ser un valor entero.',

            'cantidad_grupos.required'    => 'La :attribute es obligatoria.',
            'cantidad_grupos.integer'     => 'La :attribute debe ser un valor entero.',

        ];
    }
    public function attributes()
    {
        return [
            'numero'             => 'numero de Bateria',
            'cantidad_grupos'    => 'cantidad de grupos',
        ];
    }
}
