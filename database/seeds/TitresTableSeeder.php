<?php

use Illuminate\Database\Seeder;
use App\Titre;
class TitresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Titre::create([
            "testimonialTitre"=>"WHAT OUR CLIENTS SAY",

            "serviceTitre"=>"GET IN THE LAB AND SEE THE SERVICES",
            "teamTitre"=>"GET IN THE LAB AND MEET THE TEAM",
            "phoneTitre"=>"GET IN THE LAB AND DISCOVER THE WORLD",
            
        ]);
    }
}
