<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nombre'                    => 'required|min:3|max:30',
            'cantidad_provincias'       => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required'     => 'El :attribute es obligatorio.',
            'nombre.min'          => 'El :attribute debe contener mas de 3 caracteres.',
            'nombre.max'          => 'El :attribute debe contener max 30 caracteres.',

            'cantidad_provincias.required'    => 'La :attribute es obligatoria.',
            'cantidad_provincias.integer'     => 'La :attribute debe ser un entero.',

        ];
    }
    public function attributes()
    {
        return [
            'nombre'        => 'nombre de la Empresa',
            'cantidad_provincias'    => 'cantidad de Provincias',
        ];
    }
}
