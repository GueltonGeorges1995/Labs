<?php

namespace App\Http\Controllers\HomeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Introitem;
class HomeIntroItemController extends Controller
{
    public  function  index(){
        $introitems =  Introitem::find(1);
    return  view ('homeView', compact('introitems'));
    } 
}
