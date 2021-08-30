<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUsuario extends FormRequest
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
            "nombre" => 'required|regex:/^[a-zA-Z\s]+$/u|max:50',
            "apellido" => 'required|regex:/^[a-zA-Z\s]+$/u|max:50',
            "fechaNacimiento" => 'required|date',
            "genero" => 'required',
            "tipoD" => 'required',
            "numeroD" => 'required|integer|numeric|digits:10',
            "emailP" => 'required|email|max:30',
            "emailS" => 'required|email|max:30',
            "celular" => 'required|integer|numeric|digits:10',
            "telefono" => 'nullable|integer|numeric|digits:7',
            "direccion" => 'nullable|alpha_num|max:20',
            "estado" => 'required'
        ];
    }

    public function messages(){
        return[
            //required
            'required' => "Campo requerido",

            //letras
            //'alpha' => "Solo letras",
            'regex' => "Solo letras",
            //numeros
            'integer' => "Solo enteros",
            'numeric' => "Solo números",

            //letras numeros
            'alpha_num' => "Solo se permiten numeros y letras",

            //email
            'email' => "Debe ser formato email",

            //fecha
            'date' => "Debe ser formato de fecha",

            //limites
            'max' => "Se permiten solo :max caracteres",
            'digits' => "Se permiten solo :digits numeros",
        ];
    }
}
