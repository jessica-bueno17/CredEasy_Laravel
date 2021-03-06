<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->id();
            $table->float('valor', 10, 2);
            $table->float('valor_final', 10, 2)->nullable();
            $table->float('taxa_juros', 3, 2);
            $table->dateTime('data_solicitacao');
            $table->dateTime('data_quitacao')->nullable();
            $table->string('status', 255)->default('SOLICITADO');

            $table->string('cliente_cpf');
            $table->foreign('cliente_cpf')
                ->references('cpf')
                ->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo');
    }
};
