<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFornecedorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:70', 'unique:fornecedores,nome,'.$this->route('fornecedor.id')],
            'observacao' => ['string', 'nullable'],
        ];
    }
}
