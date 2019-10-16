<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
class AdminTeamController extends Controller
{
    public  function  index(){
        $teams =  Team::all();
        return  view ('/admin/adminTeam',compact('teams'));
    }

    public function storeBoss(Request $request){
        
        $teams =  Team::all();

        foreach ($teams as $team) {
            $team->boss = false;
            $team->save();
        }
       
        $boss = Team::find(request('boss'));
        $boss->boss = true;
        $boss->save();
       

        
        
        return redirect('/admin/team');
    }

    public function create(Request $request){
        
        $teams = new Team();

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_TEAM_DIR'));
            $teams->imgPath = "storage/".$fileName;
        }
       
        $teams->name = request('name');
        $teams->function = request('function');
        $teams->boss = false;

        $teams->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/team');



    }

    public  function  delete($id){
	    $res =  Team::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/team');
    }


    public function indexStore($id){
        $teams =  Team::find($id);
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/teamUpdate', compact('teams'));
    }


    public function store($id,Request $request)
    {
        $teams = Team::find($id);

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_TEAM_DIR'));
            $teams->imgPath = "storage/".$fileName;
        }
       
        $teams->name = request('name');
        $teams->function = request('function');
 

        $teams->save();
        
        return redirect('/admin/team');
    }


}
