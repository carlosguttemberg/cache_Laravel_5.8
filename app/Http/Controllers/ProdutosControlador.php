<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;

class ProdutosControlador extends Controller
{
    function index(){
        $produtos = Produto::with('categorias')->get();
        return view('produtos', compact(['produtos']));
    }
}
