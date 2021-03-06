<?php

namespace App\Http\Controllers\ServicesControllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
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
use App\Project;
use App\Newsletter;
use App\Http\Requests\ConcactFormRequest;
use App\Http\Requests\NewsletterFormRequest;
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
    
       $servicesgsm = Service::all()->take(-6)->reverse();
       $servicegauches = $servicesgsm->take(3);
       $servicedroites = $servicesgsm->take(-3);
       
       
       if (Project::all()->count() >= 3) {
           $projects= Project::all() ->random(3);
       } else {
           if ( Project::all()->count() >= 2) {
            $projects= Project::all() ->random(2);
           } else {
            $projects= Project::all() ->random(1);
           }
           
       }
       
        // $projects = Project::all()->random(3);
        // dd($projects);
        
    return  view ('serviceView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','servicesgsm','servicegauches','servicedroites','projects'));
    } 

    public function store(ConcactFormRequest $request){

        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'sujet' => request('sujet'),
            'message' => request('message')
        ];
        

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('/service' . '#something3');
    }

    public function email(NewsletterFormRequest $request){
        $newsletter = new Newsletter();
       
        $newsletter->email = request('newEmail');
    
        $newsletter->save();
        return back();
        // return redirect('/service' . '#yo');
    }
}
