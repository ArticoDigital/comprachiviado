<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Nombre usuario',
            'lastname' => 'Apellido Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('12345'),
            'birthday'=> '1980/08/11',
            'gender'=> 'M',
            'terms_accepted'=> 1,
            'newsletter'=> 1,
        ]);
    }
}
