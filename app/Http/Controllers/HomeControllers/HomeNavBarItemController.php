<?php

namespace App\Http\Controllers\HomeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class HomeNavBarItemController extends Controller
{
    public  function  index(){

        $navbaritems =  Navbaritem::find(1); // Prend toute la table nav
        
    return  view ('homeView', compact('navbaritems'));
    } 
}
