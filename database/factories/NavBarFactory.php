<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Navbaritem;
use Faker\Generator as Faker;

$factory->define(Navbaritem::class, function (Faker $faker) {
    return [
        'homePage'      =>  'Home',
        'servicesPage'  =>  'Services',
        'blogPage'      =>  'Blog',
        'contactPage'   =>  'Contact',
        'logoPath'   =>  'img/logo.png',
    ];
});
