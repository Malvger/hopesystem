<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            //
            'grado'=>'required',
            'nombre'=>'required',
            'descrip'=>'required',
        ];
    }

    public function attributes()
    {
        return [
            'grado' => 'grado',
            'nombre' => 'nombre',
            'descrip' => 'descripción '
        ];
    }
    public function messages()
    {
        return [
            'grado.required' => 'El :attribute es obligatorio.',
            'nombre.required' => 'El :attribute es obligatorio.',
            'descrip.required' => 'El :attribute es obligatorio.',
        ];
    }
}
