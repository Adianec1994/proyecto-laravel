<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HechoRequest extends FormRequest
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
            'tipo'        => 'required|min:4|max:250',
        ];
    }
    public function messages()
    {
        return [
            'tipo.required'     => 'El :attribute es obligatorio.',
            'tipo.min'          => 'El :attribute debe contener mas de 4 caracteres.',
            'tipo.max'          => 'El :attribute debe contener menos de 250 caracteres.',
        ];
    }
    public function attributes()
    {
        return [
            'tipo'        => 'tipo de hecho',

        ];
    }
}
