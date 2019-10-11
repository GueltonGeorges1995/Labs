<?php

use Illuminate\Database\Seeder;
use App\Carouselitem;
class CarouselitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carouselitem::create([
            "imgPath"=>"img/02.jpg",
        ]);
        Carouselitem::create([
            "imgPath"=>"img/01.jpg",
        ]);
    }
}
