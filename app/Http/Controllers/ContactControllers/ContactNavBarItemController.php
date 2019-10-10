<?php

namespace App\Http\Controllers\ContactControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class ContactNavBarItemController extends Controller
{
    public  function  index(){

        $navbaritems =  Navbaritem::find(1); // Prend toute la table nav
        
    return  view ('contactView', compact('navbaritems'));
    }
}
