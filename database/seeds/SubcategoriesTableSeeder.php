<?php

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subcategory::create(['name' => 'Computadores', 'is_active' => 1, 'category_id' => 1, ]);
        Subcategory::create(['name' => 'Celulares/Tablets', 'is_active' => 1, 'category_id' => 1, ]);
        Subcategory::create(['name' => 'Cámaras', 'is_active' => 1, 'category_id' => 1, ]);
        Subcategory::create(['name' => 'Videojuegos', 'is_active' => 1, 'category_id' => 1, ]);
        Subcategory::create(['name' => 'Reproductores', 'is_active' => 1, 'category_id' => 1, ]);

        Subcategory::create(['name' => 'Hombre', 'is_active' => 1, 'category_id' => 2, ]);
        Subcategory::create(['name' => 'Mujer', 'is_active' => 1, 'category_id' => 2, ]);
        Subcategory::create(['name' => 'Niños', 'is_active' => 1, 'category_id' => 2, ]);
        Subcategory::create(['name' => 'Deportiva', 'is_active' => 1, 'category_id' => 2, ]);

        Subcategory::create(['name' => 'Relojes', 'is_active' => 1, 'category_id' => 3, ]);
        Subcategory::create(['name' => 'Audifonos', 'is_active' => 1, 'category_id' => 3, ]);


        Subcategory::create(['name' => 'Hombre', 'is_active' => 1, 'category_id' => 4, ]);
        Subcategory::create(['name' => 'Mujer', 'is_active' => 1, 'category_id' => 4, ]);


        Subcategory::create(['name' => 'Whisky', 'is_active' => 1, 'category_id' => 5, ]);
        Subcategory::create(['name' => 'Vino', 'is_active' => 1, 'category_id' => 5, ]);
        Subcategory::create(['name' => 'Vodka', 'is_active' => 1, 'category_id' => 5, ]);
        Subcategory::create(['name' => 'Otros', 'is_active' => 1, 'category_id' => 5, ]);

    }
}
