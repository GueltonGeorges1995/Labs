<?php

use Illuminate\Database\Seeder;
use App\Team;
class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            "imgPath"=>"img/team/1.jpg",

            "name"=>"Christinne Williams",
            "function"=>"Junior developer",
            "boss"=> false,
            
        ]);

        Team::create([
            "imgPath"=>"img/team/2.jpg",

            "name"=>"Christinne Williams",
            "function"=>"CEO",
            "boss"=> true,
            
        ]);

        Team::create([
            "imgPath"=>"img/team/3.jpg",

            "name"=>"Christinne Williams",
            "function"=>"Junior developer",
            "boss"=> false,
            
        ]);
    }
}
