<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MantenimientoRequest extends FormRequest
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
            'tipo'        => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'tipo.required'     => 'El :attribute es obligatorio.',
            'tipo.integer'          => 'El :attribute debe ser un entero.',

        ];
    }
    public function attributes()
    {
        return [
            'tipo'        => 'tipo de mantenimiento',

        ];
    }
}
