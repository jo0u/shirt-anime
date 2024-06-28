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

    public function categoria($idcategoria = 0 ,Request $request){


        // select * from categoria
        $listaCategoria = Categoria::all();

        //select * from categoria limit 4
        $queryProdutos = Produto::limit(4);

        if($idcategoria != 0 ){
            $queryProdutos->where("categoria_id",$idcategoria);
        }

        


        $lista = $queryProdutos->get();
     

        return view('categoria',compact('lista','listaCategoria'));
    }
}
