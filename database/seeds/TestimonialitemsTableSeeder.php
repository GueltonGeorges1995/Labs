<?php

use Illuminate\Database\Seeder;
use App\Testimonialitem;
class TestimonialitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/01.jpg",
            
        ]);

        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/02.jpg",
            
        ]);

        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/01.jpg",
            
        ]);

        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/02.jpg",
            
        ]);

        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/01.jpg",
            
        ]);

        Testimonialitem::create([
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",

            "titre"=>"Michael Smith",
            "sousTitre"=>"CEO Company",
            "imgPath"=>"img/avatar/02.jpg",
            
        ]);
    }
}
