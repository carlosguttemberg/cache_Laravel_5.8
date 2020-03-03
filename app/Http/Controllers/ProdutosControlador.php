<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProdutosControlador extends Controller
{
    function index(){

        $expiracao = 60; 
        $produtos = Cache::remember('todosOsProdutos', $expiracao, function() {
             return Produto::with('categorias')->get();
        });

        return view('produtos', compact(['produtos']));
    }
}
