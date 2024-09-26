<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacaoDemutranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_demutran', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_solicitacao')->nullable();
            $table->string('nome')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('assunto')->nullable();
            $table->text('descricao')->nullable();
            $table->string('doc_requerimento_url')->nullable();
            $table->string('cnh_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacao_demutran');
    }
}