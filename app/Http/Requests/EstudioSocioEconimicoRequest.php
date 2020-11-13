<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudioSocioEconimicoRequest extends FormRequest
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

    // 'Apellidos',
    // 'Nombres',
    // 'Sexo',
    // 'Edad',
    // 'CUI',
    public function rules()
    {
        return [
            //
            'Apellidos'=>'min:3|max:120|required',
            'Nombres'=>'min:3|max:120|required',
            'CUI'=>'min:4|max:30|required|unique:estudio_socioeconimicos',
            'Sexo'=>'min:4|max:15|required',
            'Edad'=>'required',
        ];
    }
    public function attributes()
    {
        return [
            'Apellidos' => 'apellido',
            'Nombres' => 'nombre',
            'CUI' => 'CUI',
            'Sexo' => 'sexo',
            'Edad' => 'edad',
        ];
    }
    public function messages()
    {
        return [
            'Nombres.required' => 'El :attribute es obligatorio.',
            'Apellidos.required' => 'El :attribute es obligatorio.',
            'CUI.required' => 'El :attribute es obligatorio.',
            'Edad.required' => 'La :attribute es obligatorio.',
            'Sexo.required' => 'La :attribute es obligatorio.',
            'Apellidos.min' => 'El :attribute debe ser mínimo 3 caracteres.',
            'Nombres.min' => 'El :attribute debe ser mínimo 3 caracteres.',
            'CUI.min' => 'El :attribute debe ser mínimo 4 caracteres.',
            'Sexo.min' => 'El :attribute debe ser mínimo 4 caracteres.',
        ];
    }
}
