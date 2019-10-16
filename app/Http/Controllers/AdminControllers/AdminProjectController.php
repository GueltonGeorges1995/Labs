<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
class AdminProjectController extends Controller
{
    public  function  index(){
        $projects =  Project::all();
        return  view ('/admin/adminProject',compact('projects'));
    }


    public function create(Request $request){
        
        $projects = new Project();

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_PRO_DIR'));
            $projects->imgPath = "storage/".$fileName;
        }
       
        $projects->titre = request('titre');
        $projects->text = request('text');
        

        $projects->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/project');



    }

    public  function  delete($id){
	    $res =  Project::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/project');
    }

    public function indexStore($id){
        $projects =  Project::find($id);
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/ProjectUpdate', compact('projects'));
    }


    public function store($id,Request $request)
    {
        $projects = Project::find($id);

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_PRO_DIR'));
            $projects->imgPath = "storage/".$fileName;
        }
       
        $projects->titre = request('titre');
        $projects->text = request('text');
       
 

        $projects->save();
        
        return redirect('/admin/project');
    }
}
