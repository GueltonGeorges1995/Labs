<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Tag;
use App\Category;

use Auth;
class AdminArticleController extends Controller
{
    public  function  index(){

        $articles =  Article::all();
        $tags = Tag::all();
        $categories = Category::all();
        $a = Article::find(1);
        $t = Tag::find(1);

        // $a->tags()->attach($t); // j'attache un article à un tag
        // $t->articles()->get(); // je vais chercher tout les tag lié à l'article function dans le model 
       
        // foreach($tags as $tag){
        //     $a = $request->input($tag->name);
        // }

      
        
        return  view ('/admin/adminArticle',compact('articles','tags','categories'));
    }

    public function create(Request $request){
        $tags = Tag::all();
        $articles = new Article();
        

        $articles->user_id = Auth::id();
        $articles->category_id = 1;
        $articles->published = false;

        $article=Article::create([
            "imgPath"=>"img/02.jpg",
            "titre"=>"premier article",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
            "user_id"=>$articles->user_id,
            "category_id"=>'1',
        ]);
        

        foreach ($tags as $tag ) {
            if (request($tag->name) === "on") {
                $articleTags = Article::find($article->id);
                $articleTags->tags()->attach($tag);
            }
        }
        $articleTags = Article::find($article->id);
        // dd($articleTags->tags()->get());


        return redirect('/admin/article');
    }
    
}
