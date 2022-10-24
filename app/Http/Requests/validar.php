<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
     * @return bool
     */
    public function authorize()
    {
        return true;  //false | true
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio_normal' => 'required',
            'precio_rebajado' => 'required',
            'cantidad' => 'required',
            'id_categoria' => 'required',
            'foto' => 'required'
        ];
    }
}