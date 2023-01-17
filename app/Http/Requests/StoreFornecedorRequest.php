<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:70', 'unique:fornecedores,nome'],
            'observacao' => ['string', 'nullable'],
        ];
    }
}
