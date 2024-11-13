<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome'=> 'required|string|max:200',
            'descricao'=> 'nullable|text',
            'tamanho'=> 'nullable|string|max:10',
            'cor'=> 'nullable|string|max:50',
            'preco'=> 'required|decimal|min:0',
            'quantidade'=> 'required|integer|min:0',
            'imagem'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagem = $request->file('imagem');

        $caminhoImagem = $imagem ? $imagem->store('imagens/produtos', 'public') : null;




    }
}


