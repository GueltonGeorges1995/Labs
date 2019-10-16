<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            "name"=>"sport",
        ]);
        Tag::create([
            "name"=>"coding",
        ]);
        Tag::create([
            "name"=>"musique",
        ]);
    }
}
