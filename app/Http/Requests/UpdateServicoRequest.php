<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero_contrato' => ['string', 'nullable'],
            'numero_linha' => ['string', 'nullable', 'unique:servicos,numero_linha,'.$this->route('servico.id')],
            'observacao' => ['string', 'nullable'],
            'tipo_servico_id' => ['numeric', 'required', 'exists:tipos_servico,id'],
            'fornecedor_id' => ['numeric', 'required', 'exists:fornecedores,id'],
        ];
    }
}

