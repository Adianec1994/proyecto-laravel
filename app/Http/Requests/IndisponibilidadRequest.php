<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndisponibilidadRequest extends FormRequest
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
        ];
    }
    public function messages()
    {
        return [
            'tipo.required'     => 'El :attribute es obligatorio.',
            'tipo.min'          => 'El :attribute debe contener mas de 4 caracteres.',

        ];
    }
    public function attributes()
    {
        return [
            'tipo'        => 'tipo de indisponibilidad',

        ];
    }
}
