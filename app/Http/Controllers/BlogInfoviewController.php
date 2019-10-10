<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogInfoviewController extends Controller
{
    public  function  index(){
        return  view ('blogPostView');
    } 
}
