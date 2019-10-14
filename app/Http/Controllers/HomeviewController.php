<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbaritem;
use App\Introitem;
use App\Carouselitem;
use App\Service;
use App\Aboutitem;
use App\Testimonialitem;
class HomeviewController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        $introitems =  Introitem::find(1);
        $carouselitems =  Carouselitem::all();
        $servicetops = Service::all()->random(3);
        $aboutitems =  Aboutitem::find(1);
        $testimonialitems = Testimonialitem::all();
        $services = Service::paginate(9);
        // $servicePage = Service::paginate(9);
        
        
    return  view ('homeView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services'));
    } 
}
