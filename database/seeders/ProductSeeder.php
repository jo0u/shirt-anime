<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = Categoria::create(['categorias' => 'Geral']);

        $products = [
            ['nome' => 'Camiseta - Genesis Evangelion - Eva', 'valor' => 39.90, 'foto' => 'images/protudo1.jpg', 'descricao' => '', 'categoria' => $cat->id],
            ['nome' => 'Camiseta - Mob Psycho 100', 'valor' => 39.90, 'foto' => 'images/protudo2.jpg', 'descricao' => '', 'categoria' => $cat->id],
            ['nome' => 'Camiseta - Demon Colors', 'valor' => 39.90, 'foto' => 'images/protudo3.jpg', 'descricao' => '', 'categoria' => $cat->id],
            ['nome' => 'Camiseta - Fire Kaiju', 'valor' => 39.90, 'foto' => 'images/protudo4.jpg', 'descricao' => '', 'categoria' => $cat->id],
            ['nome' => 'Camiseta - Chainsaw - Pochita', 'valor' => 39.90, 'foto' => 'images/protudo5.jpg', 'descricao' => '', 'categoria' => $cat->id],
            ['nome' => 'Camiseta - POKEMON', 'valor' => 39.90, 'foto' => 'images/protudo6.jpg', 'descricao' => '', 'categoria' => $cat->id],
        ];

        foreach ($products as $product) {
            Produto::create($product);
        }
    
    }
}
