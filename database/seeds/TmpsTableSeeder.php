<?php

use Illuminate\Database\Seeder;
use App\Tmp;
class TmpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tmp::create([
            "tag_id"=>"1",
            "article_id"=>'1'            
        ]);
        Tmp::create([
            "tag_id"=>"2",
            "article_id"=>'1'            
        ]);
    }
}
