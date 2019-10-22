<?php

use Illuminate\Database\Seeder;
use App\Newsletter;
class NewslettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsletter::create([
            "email"=>"georges.guelton@gmail.com",
        ]);
    }
}
