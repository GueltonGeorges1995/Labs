<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbaritem;
use App\Introitem;
class HomeviewController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        $introitems =  Introitem::find(1);
    return  view ('homeView',compact('navbaritems','introitems'));
    } 
}
