<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTipoServicoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:70', 'unique:tipos_servico,nome'],
            'observacao' => ['string', 'nullable'],
        ];
    }
}
