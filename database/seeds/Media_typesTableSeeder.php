<?php

use Illuminate\Database\Seeder;
use App\Models\Media_type;

class Media_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Media_type::create([
          'type' => 'Image',
        ]);
        Media_type::create([
          'type' => 'Video',
        ]);
    }
}
