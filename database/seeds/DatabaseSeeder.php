<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Navbaritem;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NavBarItemsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
