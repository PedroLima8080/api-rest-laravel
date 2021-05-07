<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
            'name' => [
                'required',
                'max:250',
            ],
            'email' => [
                'unique:persons,email',
                'required',
                'email',
                'max:250'
            ],
            'age' => [
                'required',
                'integer',
                'max:99',
                'min:1',
            ],
            'phone' => [
                'required',
                'max:20'
            ],
            'cpf' => [
                'unique:persons,cpf',
                'required',
                'max:14'
            ],
            'cep' => [
                'required',
                'max:10'
            ],
            'street' => [
                'required',
                'max:100'
            ],
            'neighborhood' => [
                'required',
                'max:100'
            ],
            'city' => [
                'required',
                'max:100'
            ],
            'house_number' => [
                'required',
                'max:10'
            ],
            'phone' => [
                'required',
            ],
        ];
    }
}
