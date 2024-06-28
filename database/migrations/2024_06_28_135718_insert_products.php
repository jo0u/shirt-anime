<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();


        $prod = new App\Models\Produto(['nome' =>'Camiseta - Genesis Evangelion - Eva' , 'valor' => 39,90 , 'foto' => 'images/protudo1.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new App\Models\Produto(['nome' =>'CCamiseta - Mob Psycho 100' , 'valor' => 39,90 , 'foto' => 'images/protudo2.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new App\Models\Produto(['nome' =>'Camiseta - Demon Colors' , 'valor' => 39,90 , 'foto' => 'images/protudo3.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new App\Models\Produto(['nome' =>'Camiseta - Fire Kaiju' , 'valor' => 39,90 , 'foto' => 'images/protudo4.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new App\Models\Produto(['nome' =>'Camiseta - Chainsaw - Pochita' , 'valor' => 39,90 , 'foto' => 'images/protudo5.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new App\Models\Produto(['nome' =>'Camiseta - POKEMON' , 'valor' => 39,90 , 'foto' => 'images/protudo6.jpg' , 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod6->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
