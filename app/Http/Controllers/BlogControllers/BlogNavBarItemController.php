<?php

namespace App\Http\Controllers\BlogControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class BlogNavBarItemController extends Controller
{
    public  function  index(){

        $navbaritems =  Navbaritem::find(1); // Prend toute la table nav
        
    return  view ('blogView', compact('navbaritems'));
    }
}
