<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $role = Role::create(['name' => 'Admin']);

        User::create([
            'name' => 'Juan ',
            'lastname' => 'Ramos',
            'email' => 'juan2ramos@gmail.com',
            'password' => bcrypt('12345'),
            'birthday'=> '1985/12/12',
            'gender'=> 'M',
            'terms_accepted'=> 1,
            'newsletter'=> 1,
        ])->assignRole('Admin'); //
        User::create([
            'name' => 'Daniel',
            'lastname' => 'Quintero',
            'email' => 'danielrqo@gmail.com',
            'password' => bcrypt('12345'),
            'birthday'=> '1986/01/03',
            'gender'=> 'M',
            'terms_accepted'=> 1,
            'newsletter'=> 1,
        ])->assignRole('Admin');
    }
}
