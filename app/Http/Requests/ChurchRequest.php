<?php

namespace abraham1\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChurchRequest extends FormRequest
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
          'nombre' => 'required|string',
          'nit' => 'required|numeric',
          'pastor' => 'required|string',
          'celular' => 'required|numeric',
          'direccion' => 'required|string',
          'ciudad' => 'required|string',
          'pais' => 'required|string',
          'fecha_inicio' => 'required',
          'email' => 'required|email'
        ];
    }
}
