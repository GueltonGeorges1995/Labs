<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
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
use App\Mail\ContactFormMail;
use App\Http\Requests\ConcactFormRequest;
class HomeviewController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        $introitems =  Introitem::find(1);
        $carouselitems =  Carouselitem::all();
        $servicetops = Service::all()->random(3);
        $aboutitems =  Aboutitem::find(1);
        $testimonialitems = Testimonialitem::all();
        $services = Service::paginate(9)->fragment('to');
        $titres = Titre::find(1);
        
        $teamboss = Team::where("boss",true)->get();
        $test = Team::all()->count();
        if ($test<3) {
            $teams = new Team();

           $teams->imgPath = '/img/team/1.jpg';
           
            $teams->name = 'Jhon doe';
            $teams->function = 'exemple';
            $teams->boss = false;
    
            $teams->save();
        }
        if ($test<2) {
            $teams = new Team();

           $teams->imgPath = '/img/team/1.jpg';
           
            $teams->name = 'Jhon doe';
            $teams->function = 'exemple';
            $teams->boss = false;
    
            $teams->save();
        }
        $teamnull1s = Team::where("boss",false)->get()->random(1);
        $teamnull2s = Team::where("boss",false)->get()->random(1);
        while ($teamnull1s[0]->id === $teamnull2s[0]->id) {
            $teamnull2s = Team::where("boss",false)->get()->random(1);
        }

        $contacts = Contact::find(1);
        
       
        $carouselCount =  $carouselitems->count();
        // dd($carouselCount);
        
    return  view ('homeView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','carouselCount'));
    } 


    public function store(ConcactFormRequest $request){

        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'sujet' => request('sujet'),
            'message' => request('message')
        ];
        

        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return redirect('/' .'#something');
    }
}

