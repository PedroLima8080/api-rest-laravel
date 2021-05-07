<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
        $id = $this->segment(3);

        return [
            'name' => [
                'required',
                'max:250',
            ],
            'email' => [
                "unique:persons,email,{$id},id",
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
                "unique:persons,cpf,{$id},id",
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
        ];
    }
}
