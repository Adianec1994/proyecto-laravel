<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TecnologiaRequest extends FormRequest
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
            'tipo'        => 'required|min:1|max:15',
            'serie'       => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'tipo.required'     => 'El :attribute es obligatorio.',
            'tipo.min'          => 'El :attribute debe contener mas de un caracter.',
            'tipo.max'          => 'El :attribute debe contener max 15 caracteres.',

            'serie.required'    => 'El :attribute es obligatorio.',
            'serie.integer'     => 'El :attribute debe ser un entero.',

        ];
    }
    public function attributes()
    {
        return [
            'tipo'        => 'tipo de tecnologia',
            'serie'    => 'numero de serie',
        ];
    }
}
