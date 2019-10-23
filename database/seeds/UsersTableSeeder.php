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
        User::create([
            "name"=>"guest",
            'role'=>'guest',
            'email'=>'guest@guest.it',
            'password'=>bcrypt('12345678'),
            'imgPath'=>'img/02.jpg',
            'text'=>'Voici ma biographie',
        ]);

        User::create([
            "name"=>"editeur",
            'role'=>'editeur',
            'email'=>'editeur@editeur.it',
            'password'=>bcrypt('12345678'),
            'imgPath'=>'img/02.jpg',
            'text'=>'Voici ma biographie',
        ]);

        User::create([
            "name"=>"admin",
            'role'=>'admin',
            'email'=>'admin@admin.it',
            'password'=>bcrypt('12345678'),
            'imgPath'=>'img/02.jpg',
            'text'=>'Voici ma biographie',
        ]);
    }
}
