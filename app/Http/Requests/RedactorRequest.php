<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedactorRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                //dd('sss');
                return [
                    'firstname' => 'required|max:100',
                    'lastname' => 'required|max:100',
                    'username' => 'required|max:100',
                    'birthdate' => 'required|max:100',
                    'email' => 'required|email|unique:users,email',
                    'ci' => 'required|between:3,32',
                    'phone' => 'required|numeric',
                    'password' => 'required|between:3,32',
                    'password_confirm' => 'required|same:password',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'firstname' => 'required|max:100',
                    'lastname' => 'required|max:100',
                    'username' => 'required|max:100',
                    'birthdate' => 'required|max:100',
                    'email' => 'required|email|unique:users,email,' . $this->user->id,
                    'ci' => 'required|between:3,32',
                    'phone' => 'required|numeric',
                    'password' => 'required|between:3,32',
                    'password_confirm' => 'required|same:password',
                ];
            }
            default:
                break;
        }

        return [

        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'El campo :attribute es obligatorio.',
            'lastname.required' => 'El campo :attribute es obligatorio.',
            'username.required' => 'El campo :attribute es obligatorio.',
            'birthdate.required' => 'El campo :attribute es obligatorio.',
            'email.required' => 'El campo :attribute es obligatorio.',
            'ci.required' => 'El campo :attribute es obligatorio.',
            'phone.required' => 'El campo :attribute es obligatorio.',
            
            'firstname.max' => 'El campo :attribute no debe ser mayor a 100 caracteres.',
            'lastname.max' => 'El campo :attribute no debe ser mayor a 100 caracteres.',
            'username.max' => 'El campo :attribute no debe ser mayor a 100 caracteres.',
            'username.numeric' => 'El campo :attribute solo debe contener numeros.',
            
            'email.unique' => 'El campo :attribute ya existe.',
            
            'password.required' => 'El campo :attribute es obligatorio.',
            'password.between' => 'El campo :attribute debe tener 3 a 32 caracteres.',
            'password_confirm.same' => 'Este campo no coincide con el Password.',
        ];
    }

    public function attributes()
    {
        return [
            'firstname' => 'Nombre',
            'lastname' => 'Apellido',
            'username' => 'Nombre de usuario',
            'birthdate' => 'Fecha de nacimiento',
            'email' => 'E-mail',
            'ci' => 'Carnet de identidad',
            'phone' => 'Telefono',
            'password' => 'Password',
        ];
    }
}
