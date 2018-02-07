<?php

use Illuminate\Database\Seeder;
use App\Models\Original_product;

class Original_productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Original_product::create([
          'name' => 'Camista Bayer Munich',
          'description' => 'La descripción que da el proveedor',
          'brand_name' => 'Adidas',
          'price' => 230000,
          'false_product_id' => 1,
        ]);

        Original_product::create([
          'name' => 'Tenis adidas ref 3232',
          'description' => 'La descripción que da el proveedor',
          'brand_name' => 'Adidas',
          'price' => 200000,
          'false_product_id' => 2,
        ]);
    }
}
