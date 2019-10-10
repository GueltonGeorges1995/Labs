<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactviewController extends Controller
{
    public  function  index(){
        return  view ('contactView');
    } 
}
