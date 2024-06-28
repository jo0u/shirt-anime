<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){

        $dados = [];
        $listaProdutos = Produto::all();

        $dados['lista'] = $listaProdutos;

        return view('home',['lista' => $dados]);

    }

    public function categoria(Request $request){
        $data = [];

        $listaCategorias = Categoria::all();

        return view('categoria',compact('data'));
    }
}
