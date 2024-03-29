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
        try {
            Schema::create("Livro", function (Blueprint $table) {
                $table->id();
                $table->string("titulo");
                $table->string("autor");
                $table->date("data_lancamento");
                $table->string("genero");
                $table->integer("numero_paginas");
                $table->timestamps();
            });
        } catch (Exception $e) {
            echo "ERRO...";
        }
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("Livro");
    }
};
