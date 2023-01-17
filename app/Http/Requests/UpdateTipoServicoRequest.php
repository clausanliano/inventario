<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTipoServicoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'max:70', 'unique:tipos_servico,nome,'.$this->route('tiposervico.id')],
            'observacao' => ['string', 'nullable'],
        ];
    }
}
