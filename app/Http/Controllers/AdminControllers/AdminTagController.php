<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\TagRequest;
class AdminTagController extends Controller
{
    public  function  index(){

        $tags =  Tag::all();

        return  view ('/admin/adminTag',compact('tags'));
    }

    public function create(TagRequest $request){
        
        $tags = new Tag();

        $tags->name = request('name');

        $tags->save();

        return redirect('/admin/tag');
    }

    public  function  delete($id){

        $res =  Tag::where('id',$id)->delete(); 
        
	    return  redirect('/admin/tag');
    }


    public function indexStore($id){
        $tags =  Tag::find($id);
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/tagUpdate', compact('tags'));
    }


    public function store($id,TagRequest $request)
    {
        $tags = Tag::find($id);

       
        $tags->name = request('name');
  

        $tags->save();
        
        return redirect('/admin/tag');
    }




}
