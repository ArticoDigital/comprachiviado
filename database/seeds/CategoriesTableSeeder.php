<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
          'name' => 'Tecnología',
          'icon' => 'ruta icono o clase',
          'description' => 'De todito y solo modernos',
          'is_active' => 1,
          'button_text' => 'Ver más cositas cheveres',
          'order'=> 1,
      ]);

      Category::create([
          'name' => 'Ropa',
          'icon' => 'ruta icono o clase',
          'description' => "La percha, la pinta para el tumba'o",
          'is_active' => 1,
          'button_text' => 'Ver más pinticas',
          'order'=> 2,
      ]);

      Category::create([
          'name' => 'Accesorios',
          'icon' => 'ruta icono o clase',
          'description' => 'Todo lo que se necesita para la percha',
          'is_active' => 1,
          'button_text' => 'Ver más copias "originales"',
          'order'=> 3,
      ]);

      Category::create([
          'name' => 'Perfumería',
          'icon' => 'ruta icono o clase',
          'description' => 'Pa oler bueno y barato',
          'is_active' => 1,
          'button_text' => 'Ver más, huela bueno',
          'order'=> 4,
      ]);

      Category::create([
          'name' => 'Bebidas',
          'icon' => 'ruta icono o clase',
          'description' => 'El mejor traguito al mejor precio',
          'is_active' => 1,
          'button_text' => 'Ver más cositas pa tomar',
          'order'=> 5,
      ]);


    }
}
