<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_contrato')->nullable();
            $table->string('numero_linha')->nullable();
            $table->text('observacao')->nullable();

            $table->foreignId('tipo_servico_id')->constrained('tipos_servico', 'id');
            $table->foreignId('fornecedor_id')->constrained('fornecedores', 'id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicos');
    }
};
