<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aboutitem;

class AdminAboutController extends Controller
{
    public  function  index(){
        $aboutitems =  Aboutitem::find(1);
        return  view ('/admin/adminAbout',compact('aboutitems'));

    }

    public function store(Request $request){
        $aboutitems =  Aboutitem::find(1);

        $aboutitems->titre = request('titre');
        $aboutitems->textGauche = request('textGauche');
        $aboutitems->textDroite = request('textDroite');

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_ABOUT_DIR'));
            $aboutitems->imgPath = "/storage/".$fileName;
        }

        $aboutitems->videoPath = request('videoPath');

        $aboutitems->save();

        return  view ('/admin/adminAbout',compact('aboutitems'));
    }
}
