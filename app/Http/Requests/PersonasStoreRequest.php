<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonasStoreRequest extends FormRequest
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
            'cedula' => 'required| unique:personas,cedula',
            'nombre'=> 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cedula.request' => 'el valor de la cedula es obligatorio',
            'cedula.unique'=>'ya existeuna persona con este numero de cedula',
            'nombre.request' => 'el campo de la nombre es obligatorio',
            'apellido.request' => 'el campo de la apellido es obligatorio',
            'direccion.request' => 'el campo de la direccion es obligatorio',
            'telefono.request' => 'el campo de telefono es obligatorio'
        ];
    }
}
