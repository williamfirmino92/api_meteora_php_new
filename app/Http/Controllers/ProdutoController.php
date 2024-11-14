<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome'=> 'required|string|max:255',
            'descricao'=> 'nullable|string',
            'tamanho'=> 'nullable|string|max:10',
            'cor'=> 'nullable|string|max:50',
            'preco'=> 'required|numeric|min:0',
            'quantidade'=> 'required|integer|min:0',
            'imagem'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
 

        $imagem = $request->file('imagem');

        $caminhoImagem = $imagem ? $imagem->store('imagens/produtos', 'public') : null;

        Produto::create([
            'nome'=> $request-> nome,
            'descricao'=> $request-> descricao,
            'tamanho'=> $request-> tamanho,
            'cor'=> $request-> cor,
            'preco'=> $request-> preco,
            'quantidade'=> $request-> quantidade,
            'imagem'=> $request-> imagem
        ]);

        return redirect()->route('produtos.create')->with('success', 'Produto cadastrado com sucesso!');

    }
}


