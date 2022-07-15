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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->string('cpf',14)->unique();
            $table->decimal('renda',10,2,true)->default(0);
            $table->string('endereco',255);
            $table->string('profissao',255);
            $table->string('numeroTelefone');
            $table->string('email',255);
            $table->string('senha',255);
            $table->string('tipo_usuario',255)->default('CLIENTE');
            
        });

        DB::statement("ALTER TABLE cliente ADD CONSTRAINT tipo_usuario_valido CHECK (tipo_usuario IN ('CLIENTE','GESTOR'))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
