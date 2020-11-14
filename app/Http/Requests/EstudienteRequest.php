<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudienteRequest extends FormRequest
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
            // // $table->integer('Area')->nullable();
            // // $table->string('PrimerNombre');
            // // $table->string('SegundoNombre')->nullable();
            // // $table->string('ApellidoPaterno');
            // // $table->string('ApellidoMaterno')->nullable();
            // // $table->string('Sexo');
            // // $table->integer('Edad');
            // // $table->string('CUI')->unique();
    /**
     * Get the validation rules that apply to the request.
     *             $table->bigIncrements('id');

     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'PrimerNombre'=>'min:3|max:120|required',
            'ApellidoPaterno'=>'min:3|max:120|required',
            'CUI'=>'min:4|max:30|required|unique:estudiantes',
            'Sexo'=>'min:4|max:15|required',
            'Edad'=>'required',
            // 'Area'=> 'required',
        ];
    }
    public function attributes()
    {
        return [
            'PrimerNombre' => 'primer Nombre',
            'ApellidoPaterno' => 'apellido paterno',
            'CUI' => 'CUI',
            'Sexo' => 'sexo',
            'Edad' => 'edad',
        ];
    }
    public function messages()
    {
        return [
            'PrimerNombre.required' => 'El :attribute es obligatorio.',
            'ApellidoPaterno.required' => 'El :attribute es obligatorio.',
            'CUI.required' => 'El :attribute es obligatorio.',
            'Edad.required' => 'La :attribute es obligatorio.',
            'Sexo.required' => 'La :attribute es obligatorio.',
            'ApellidoPaterno.min' => 'El :attribute debe ser mínimo 3 caracteres.',
            'PrimerNombre.min' => 'El :attribute debe ser mínimo 3 caracteres.',
            'CUI.min' => 'El :attribute debe ser mínimo 4 caracteres.',
            'Sexo.min' => 'El :attribute debe ser mínimo 4 caracteres.',
        ];
    }



}
