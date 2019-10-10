<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbaritem;
class HomeviewController extends Controller
{
    public  function  index(){
    return  view ('homeView');
    } 
}
