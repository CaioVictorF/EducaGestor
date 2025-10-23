<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function(Blueprint $table){
            $table->id();
            $table->string('nome_aluno');
            $table->date('matricula');
            $table->string('endereço');
            $table->string('transtornos');
            $table->string('nome_responsável');
            $table->integer('numero_responsável');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
