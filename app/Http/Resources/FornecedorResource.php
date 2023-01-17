<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FornecedorResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id_fornecedor' => $this->id,
            'nome_fornecedor' => $this->nome,
            'observacao_fornecdor'=> $this->observacao,
        ];
    }
}
