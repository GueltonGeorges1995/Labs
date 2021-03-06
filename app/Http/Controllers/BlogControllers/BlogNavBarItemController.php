<?php

namespace App\Http\Controllers\BlogControllers;

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
use App\Article;
use App\Tag;
Use App\Category;
use App\Commentaire;
use App\Http\Requests\NewsletterFormRequest;
class BlogNavBarItemController extends Controller
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
        $articles = Article::where('published', true)->orderBy('created_at','desc')->paginate(3);
       
        $tags = Tag::all();
        $categories = Category::all();

        $commentaires = Commentaire::all();
        $countSearch = true;
       
        $date = date('d-F-Y');
        // dd($date);

    return  view ('blogView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','articles','tags','categories','commentaires','countSearch','date'));
    }

    public function indexStore($id){
        $articles =  Article::find($id);
        $tags = Tag::all();
        $categories = Category::all();

      
        return  view('blogPostView', compact('articles','tags','categories'));
    }


    public function email(NewsletterFormRequest $request){
        $newsletter = new Newsletter();
       
        $newsletter->email = request('newEmail');
    
        $newsletter->save();
        return  redirect('/service');
    }

    public function search(){

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
        $articles = Article::where('published', true)->paginate(3);
       
        $tags = Tag::all();
        $categories = Category::all();

        $commentaires = Commentaire::all();
        $countSearch = true;



        $articles = Article::all();

        $searchItems = request('searchItems');
        $search = [];
        foreach ($articles as $article ) {
            if (stripos($article,$searchItems)) {
                array_push($search,$article);
                $countSearch = true;
            }
        }
        if (empty($search)) {
            $countSearch = false;
            
        }
        // dd($search);
        return  view ('searchView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','articles','tags','categories','commentaires','countSearch','search'));
        
    }
    public function category($id){
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
        $articles = Article::where('category_id',$id)->paginate(3);
       
        $tags = Tag::all();
        $categories = Category::all();

        $commentaires = Commentaire::all();
        $countSearch = true;
       
        $date = date('d-F-Y');
        return  view ('blogView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','articles','tags','categories','commentaires','countSearch','date'));
    }

    public function tag($id){
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

        // $articles = Article::find($id);
       
        // $articles->tags()->get();
             
    //    dd($articles);

   




        $articles = Tag::find($id)->articles()->orderBy('created_at','desc')->paginate(3);
       
 $tags = Tag::all();
        // $articles = Article::find($id)->tags($tag)->get();

        $categories = Category::all();

        $commentaires = Commentaire::all();
        $countSearch = true;
       
        $date = date('d-F-Y');
        return  view ('blogView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','articles','tags','categories','commentaires','countSearch','date'));
    }
}
