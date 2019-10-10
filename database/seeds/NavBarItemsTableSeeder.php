<?php

use Illuminate\Database\Seeder;
use App\Navbaritem;
class NavBarItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navbar=factory(App\Navbaritem::class,1)->create();
    }
}
