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
        Schema::create('mizeraveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('senha');
            $table->string('cpf', 11);
            $table->string('telefone', 20);
            $table->text('email');
            $table->text('situacao');
            $table->string('cep', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mizeraveis');
    }
};
