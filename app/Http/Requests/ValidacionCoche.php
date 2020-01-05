<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCoche extends FormRequest
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
            "nombre"=>"required",
            "matricula"=>"required",
            "color"=>"required",
            "año_fabricacion"=>"required"
            
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre no debe quedar vacio'
            
        ];
    }
}
