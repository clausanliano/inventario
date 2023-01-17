<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicoResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id_servico' => $this->id,
            'numero_contrato_servico' => $this->numero_contrato,
            'numero_linha_servico' => $this->numero_linha,
            'observacao_servico'=> $this->observacao,
            'fornecedor_id' => $this->fornecedor_id,
            'fornecedor_nome' => $this->fornecedor->nome,
            'tipo_servico_id' => $this->tipo_servico_id,
            'tipo_servico_nome' => $this->tipo_servico->nome,

        ];
    }
}

