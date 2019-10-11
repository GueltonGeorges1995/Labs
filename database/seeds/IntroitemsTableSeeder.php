<?php

use Illuminate\Database\Seeder;
use App\Introitem;
class IntroitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Introitem::create([
            "textIntro"=>"Bienvenue sur mon site",
            "imgPathIntro"=>"img/big-logo.png",
          
        ]);
    }
}
