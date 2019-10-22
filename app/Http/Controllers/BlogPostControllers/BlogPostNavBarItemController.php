<?php

namespace App\Http\Controllers\BlogPostControllers;

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
class BlogPostNavBarItemController extends Controller
{
    public  function  index($id){
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
        $articles = Article::paginate(3);
       
        $article =  Article::find($id);
        $tags = Tag::all();
        $categories = Category::all();

        $commentaires = Commentaire::all();
        $bonneid = Article::find($id);
        $nbrcommentaire = Commentaire::where('article_id',$bonneid->id)->count();
        
    return  view ('blogPostView',compact('navbaritems','introitems','carouselitems','servicetops','aboutitems','testimonialitems','services','titres','teamboss','teamnull1s','teamnull2s','contacts','articles','article','tags','categories','commentaires','nbrcommentaire'));
    }

    public function store($id, Request $request){
        $commentaire = new Commentaire();
       
        $commentaire->name = request('name');
        $commentaire->imgPath = 'img/02.jpg';
        $commentaire->sujet = request('sujet');
        $commentaire->message = request('message');
        $commentaire->email = request('email');
        $bonneid = Article::find($id);
        $commentaire->article_id = $bonneid->id;
      
       
        $commentaire->save();
      
        return back();

    }
    
   
}
