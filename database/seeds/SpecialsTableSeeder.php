<?php

use Illuminate\Database\Seeder;
use App\Models\Special;

class SpecialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Special::create([
          'name' => 'Promo Bayer James',
          'special_image' => 'ruta de la imagen especial',
          'is_active' => 1,
          'false_product_id' => 1,
        ]);
    }
}
