<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = "Livro";
    
    protected $fillable = [
        "titulo",
        "autor",
        "data_lancamento",
        "genero",
        "numero_paginas",
    ];

}
