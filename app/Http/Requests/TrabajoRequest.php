<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabajoRequest extends FormRequest
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'beneficios' => 'required',
            'ambiente_trabajo' => 'required',
            'sueldo' => 'required|numeric',
            'email' => 'required|email',
            'ciudad' => 'required',
            'pais' => 'required',
            'level_id' => 'required',
            'tipo_id' => 'required',
            'categorias' => 'required'
        ];
    }
}
