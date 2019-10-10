<?php

namespace App\Http\Controllers\BlogPostControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class BlogPostNavBarItemController extends Controller
{
    public  function  index(){

        $navbaritems =  Navbaritem::find(1); // Prend toute la table nav
        
    return  view ('blogPostView', compact('navbaritems'));
    }
}
