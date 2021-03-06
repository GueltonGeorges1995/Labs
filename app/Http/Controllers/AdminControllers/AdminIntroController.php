<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Introitem;
use App\Http\Requests\IntroRequest;
class AdminIntroController extends Controller
{
    public  function  index(){
        $introitems =  Introitem::find(1);
        return  view ('/admin/adminIntro',compact('introitems'));

    }

    public function store(IntroRequest $request){
        $introitems =  Introitem::find(1);
        $introitems->textIntro = request('textIntro');
       

        if($request->hasFile('imgPathIntro')){
            $file = $request->file('imgPathIntro');
            $fileName = $file->store(env('IMG_LOGO_DIR'));
            $introitems->imgPathIntro = "/storage/".$fileName;
        }
        
        $introitems->save();
        dd($introitems);
        return  view ('/admin/adminIntro',compact('introitems'));
    }
}
