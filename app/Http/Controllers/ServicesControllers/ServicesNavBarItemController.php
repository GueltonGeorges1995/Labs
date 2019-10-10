<?php

namespace App\Http\Controllers\ServicesControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class ServicesNavBarItemController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1); // Prend toute la table nav
    return  view ('serviceView', compact('navbaritems'));
    } 
}
