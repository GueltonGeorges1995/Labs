<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesviewController extends Controller
{
    public  function  index(){
        return  view ('serviceView');
        } 
}
