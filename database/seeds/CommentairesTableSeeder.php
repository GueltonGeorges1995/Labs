<?php

use Illuminate\Database\Seeder;
use App\Commentaire;
class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Commentaire::create([
            "name"=>"Georges Guelton",
            "email"=>"georges.guelton@gmail.com",
            "sujet"=>"coding test test",
            "message"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            "imgPath"=>"img/02.jpg",
            "article_id"=>"2",
           
        ]);
        
    }
}
