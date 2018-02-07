<?php

use Illuminate\Database\Seeder;
use App\Models\False_product;

class False_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        False_product::create([
          'name' => 'Camiseta del Bayer Munich',
          'shortdescription' => 'COMO LA DE JAMES',
          'description' => 'Camiseta 50% algodon bla bla bla',
          'invitation_text' =>  'Este es el texto de por que no se debe comprar chiviado',
          'price' => '10000',
          'image_pc' => 'rutadeimagen',
          'is_active' => 1,
          'subcategory_id' => 9,
        ]);

        False_product::create([
          'name' => 'Tenis Adidas',
          'shortdescription' => 'PATAS PA’ QUE LAS QUIERO <br>Con estas zapatillas si se levatan vuelo',
          'description' => 'Tenis adidas casi originales, copia triple A',
          'invitation_text' =>  'Este es el texto de por que no se debe comprar chiviado',
          'price' => '50000',
          'image_pc' => 'rutadeimagen',
          'is_active' => 1,
          'subcategory_id' => 9,
        ]);
    }
}
