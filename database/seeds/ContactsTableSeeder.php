<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            "titre"=>"CONTACT US",
            "text"=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "officeTitre"=>"Main Office",
            "adress"=>"C/ Libertad, 34 05200 Arévalo",
            "phone"=>"0034 37483 2445 322",
            "email"=>"hello@company.com",
          
        ]);
    }
}
