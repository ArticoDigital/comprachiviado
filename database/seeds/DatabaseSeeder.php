<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(False_productsTableSeeder::class);
        $this->call(Original_productsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(PromosTableSeeder::class);
        $this->call(SpecialsTableSeeder::class);
        $this->call(Media_typesTableSeeder::class);
        $this->call(Media_productsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);

    }
}
