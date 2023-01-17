<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servicos';

    protected $fillable = ['numero_contrato', 'numero_linha', 'observacao', 'tipo_servico_id', 'fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
    }

    public function tipo_servico()
    {
        return $this->belongsTo(TipoServico::class, 'tipo_servico_id', 'id');
    }

}
