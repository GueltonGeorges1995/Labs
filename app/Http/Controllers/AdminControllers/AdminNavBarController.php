<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class AdminNavBarController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        return  view ('/admin/adminNavBar',compact('navbaritems'));

    } 
}
