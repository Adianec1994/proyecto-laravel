<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PotenciaRequest extends FormRequest
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
            'cantidad'        => 'required',
            'retirado_potencia'       => 'required|max:2',
        ];
    }
    public function messages()
    {
        return [
            'cantidad.required'     => 'La :attribute es obligatoria.',

            'retirado_potencia.required'    => 'El campo :attribute es obligatorio.',
            'retirado_potencia.max'     => 'El campo :attribute debe contener max 2 caracteres.',

        ];
    }
    public function attributes()
    {
        return [
            'cantidad'        => 'cantidad de potencia',
            'retirado_potencia'    => 'retirado de la potencia',
        ];
    }
}
