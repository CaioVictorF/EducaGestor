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
            $table->string('nome');
            $table->date('matricula');
            $table->string('endereco');
            $table->string('transtornos');
            $table->string('nome_responsavel');
            $table->string('numero_responsavel');
            $table->decimal('mensalidade', 8,2);
            $table->datetime('proxima_cobranca');

            $table->foreignId('turma_id')->constrained('turmas')->onDelete('cascade');

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
