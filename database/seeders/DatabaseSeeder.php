<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Livro::create([
            'titulo' => 'Me Chame Pelo Seu Nome',
            'autor' => 'André Aciman',
            'data_lancamento' => '2007-01-23',
            'genero' => 'Romance',
            'numero_paginas' => 256
        ]);

        Livro::create([
            'titulo' => 'Harry Potter e a Pedra Filosofal',
            'autor' => 'J.K. Rowling',
            'data_lancamento' => '1997-06-26',
            'genero' => 'Ficção',
            'numero_paginas' => 223
        ]);

        Livro::create([
            'titulo' => 'O Conde de Monte Cristo',
            'autor' => 'Alexandre Dumas',
            'data_lancamento' => '1844-08-28',
            'genero' => 'Ação',
            'numero_paginas' => 1000
        ]);

        Livro::create([
            'titulo' => 'O Assassinato de Roger Ackroyd',
            'autor' => 'Agatha Christie',
            'data_lancamento' => '1926-06-06',
            'genero' => 'Mistério',
            'numero_paginas' => 200
        ]);

        Livro::create([
            'titulo' => 'A Culpa é das Estrelas',
            'autor' => 'John Green',
            'data_lancamento' => '2012-01-10',
            'genero' => 'Drama',
            'numero_paginas' => 288
        ]);
    }
}
