<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FabricanteResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id_fabricante' => $this->id,
            'nome_fabricante' => $this->nome,
        ];
    }
}
