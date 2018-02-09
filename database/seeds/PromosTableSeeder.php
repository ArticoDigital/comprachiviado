<?php

use Illuminate\Database\Seeder;
use App\Models\Promo;
class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Promo::create([
          'name' => 'Promo Bayer James',
          'init_date' => '2018-1-1',
          'text_promo' => 'Adidas store, te da un cupon para que adquieras la camista del Bayer Munich',
          'discount_percentage' => 30,
          'is_active' => 1,
          'false_product_id' => 1,
          'company_id'=> 1,
        ]);

    }
}
