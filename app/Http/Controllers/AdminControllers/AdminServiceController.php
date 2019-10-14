<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
class AdminServiceController extends Controller
{
    public  function  index(){
        $services =  Service::all();
        return  view ('/admin/adminService',compact('services'));
    }
}
