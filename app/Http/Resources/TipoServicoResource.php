<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoServicoResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id_tipo_servico' => $this->id,
            'nome_tipo_servico' => $this->nome,
            'observacao_tipo_servico'=> $this->observacao,
        ];
    }
}
