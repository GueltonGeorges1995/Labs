<?php

namespace App\Http\Controllers\ServicesControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
use App\Introitem;
use App\Carouselitem;
use App\Service;
use App\Aboutitem;
use App\Testimonialitem;
use App\Titre;
use App\Team;
use App\Contact;
class ServicesNavBarItemController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        $introitems =  Introitem::find(1);
        $carouselitems =  Carouselitem::all();
        $servicetops = Service::all()->random(3);
        $aboutitems =  Aboutitem::find(1);
        $testimonialitems = Testimonialitem::all();
        $services = Service::paginate(9);
        $titres = Titre::find(1);
        
        $teamboss = Team::where("boss",true)->get();
        $teamnull1s = Team::where("boss",false)->get()->random(1);
        $teamnull2s = Team::where("boss",false)->get()->random(1);
        while ($teamnull1s[0]->id === $teamnull2s[0]->id) {
            $teamnull2s = Team::where("boss",false)->get()->random(1);
        }

        $contacts = Contact::find(1);
    
       $servicesgsm = Service::all()->take(-6);
       $servicegauches = $servicesgsm->take(3);
       $servicedroites = $servicesgsm->take(-3);
       
        
        
    return  view ('serviceView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','servicesgsm','servicegauches','servicedroites'));
    } 
}
