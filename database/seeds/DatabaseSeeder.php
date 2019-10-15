<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Navbaritem;
use App\Introitem;
use App\Carouselitem;
use App\Service;
use App\Aboutitem;
use App\Testimonialitem;
use App\Titre;
use App\Team;
use App\Contact;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(NavBarItemsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(IntroitemsTableSeeder::class);
        // $this->call(CarouselitemsTableSeeder::class);
        // $this->call(ServicesTableSeeder::class);
        // $this->call(AboutitemsTableSeeder::class);
        // $this->call(TestimonialitemsTableSeeder::class);
        // $this->call(TitresTableSeeder::class);
        // $this->call(TeamsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
    }
}
