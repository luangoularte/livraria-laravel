<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Http\Requests\CreateRequest;
use App\Http\Requests\FiltroRequest;

use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mostrarLivros()
    {
        try {
            $livros = Livro::all();
            return response()->json($livros, 200, [], JSON_UNESCAPED_UNICODE);
        } catch (\Throwable $e) {
            echo "ERRO";
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateRequest $request)
    {

        try {
            $livro = Livro::create([
            'titulo' => $request->input('titulo'),
            'autor' => $request->input('autor'),
            'data_lancamento' => $request->input('data_lancamento'),
            'genero' => $request->input('genero'),
            'numero_paginas' => $request->input('numero_paginas'),
            ]);

            return response()->json($livro, 200, [], JSON_UNESCAPED_UNICODE);

        } catch (\Throwable $e) {
            echo "ERRO";
        }
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        try {

            $livro = Livro::find($id);
            $livro->update($request->all());

            return response()->json($livro, 200, [], JSON_UNESCAPED_UNICODE);

        } catch (\Throwable $e) {
            echo "ERRO";
        }       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {

        try {

            $livro = Livro::find($id);
            $livro->delete();

        } catch (\Throwable $e) {
            echo "ERRO";
        }
        
    }

    public function filtroLivros(FiltroRequest $request)
    {

        try {
            $query = Livro::query();

            if ($request->has('titulo')) {
                $query->where('titulo', 'like', '%' . $request->input('titulo') . '%');
            }

            if ($request->has('data_inicial')) {
                $query->whereDate('data_lancamento', '>=', $request->input('data_inicial'));
            }

            if ($request->has('data_final')) {
                $query->whereDate('data_lancamento', '<=', $request->input('data_final'));
            }

            if ($request->has('genero')) {
                $query->where('genero', $request->input('genero'));
            }

            if ($request->has('autor')) {
                $query->where('autor', 'like', '%' . $request->input('autor') . '%');
            }

            $livros = $query->get();

            return response()->json($livros, 200, [], JSON_UNESCAPED_UNICODE);

        } catch (\Throwable $e) {
            echo "ERRO";
        }
        

        
    }
}
