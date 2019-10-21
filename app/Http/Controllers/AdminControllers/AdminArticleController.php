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

    public  function  delete($id){
	    $res =  Article::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/article');
    }
    



    public function create(Request $request){
        $tags = Tag::all();
        $articles = new Article();
        

        $articles->user_id = Auth::id();
        
        $articles->published = false;

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_AR_DIR'));
            $articles->imgPath = "storage/".$fileName;
        }
        $img = $articles->imgPath;

        $articles=Article::create([
            "imgPath"=>$img,
            "titre"=>request('titre'),
            "text"=>request('text'),
            "user_id"=>$articles->user_id,
            "category_id"=>request('category'),
        ]);
       
        

        foreach ($tags as $tag ) {
            if (request($tag->name) === "on") {
                $articleTags = Article::find($articles->id);
                $articleTags->tags()->attach($tag);
            }
        }
        $articleTags = Article::find($articles->id);
        // dd($articleTags->tags()->get());


        return redirect('/admin/article');
    }

    public function indexStore($id){
        $articles =  Article::find($id);
        $tags = Tag::all();
        $categories = Category::all();
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/articleUpdate', compact('articles','tags','categories'));
    }






    public function store($id,Request $request){
        $tags = Tag::all();
        $articles = Article::find($id);
        
        $articles->user_id = Auth::id();
        
        $articles->published = false;

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_AR_DIR'));
            $articles->imgPath = "storage/".$fileName;
        }
        $img = $articles->imgPath;

        // $articles=Article::create([
        //     "imgPath"=>$img,
        //     "titre"=>request('titre'),
        //     "text"=>request('text'),
        //     "user_id"=>$articles->user_id,
        //     "category_id"=>request('category'),
        // ]);
       
        $articles->imgPath = $img;
        $articles->titre = request('titre');
        $articles->text = request('text');
        
        $articles->category_id = request('category');

        
        // foreach ($tags as $tag ) {
        //     if (request($tag->name) === "on") {
        //         $articleTags = Article::find($articles->id);
        //         // $articleTags->tags($tag);
        //         // $articleTags->tags()->attach($tag);
                
        //         // dd($articleTags->tags($tag)->delete());
        //     }
        // }
        
        // foreach ($tags as $tag ) {
        //     if (request($tag->name) === "on") {
        //         $articleTags = Article::find($articles->id);
             
        //         $articleTags->tags()->detach($tag);
                
        //     }
        // }

        $articles->tags()->detach();

        foreach ($tags as $tag ) {
            if (request($tag->name) === "on") {
                $articleTags = Article::find($articles->id);
             
                $articleTags->tags()->attach($tag);
                
            }
        }
        
        
        
        
        $articles->save();
        
        return redirect('/admin/article');
    }



    
}
