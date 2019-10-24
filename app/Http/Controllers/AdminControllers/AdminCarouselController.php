<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carouselitem;
use App\Http\Requests\CarouselRequest;
class AdminCarouselController extends Controller
{
    public  function  index(){
        $carouselitems =  Carouselitem::all();
        return  view ('/admin/adminCarousel',compact('carouselitems'));

    }

    public  function  delete($id){
	    $res =  Carouselitem::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/carousel');
    }


    public function store(CarouselRequest $request){
        
        $carouselitems = new Carouselitem();
       

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_CAROU_DIR'));
            $carouselitems->imgPath = "/storage/".$fileName;
        }

        $carouselitems->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/carousel');
    }
}
