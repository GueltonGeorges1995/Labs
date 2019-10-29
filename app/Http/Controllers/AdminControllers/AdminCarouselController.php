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
        $carouselCount =  $carouselitems->count();
        // if ($carouselCount === 0) {
        //     $carouselitems = new Carouselitem();
        //     $carouselitems->imgPath = '/img/0.1.jpg';
        //     $carouselitems->save();
        // }
        
        return  view ('/admin/adminCarousel',compact('carouselitems','carouselCount'));

    }

    public  function  delete($id){
        $res =  Carouselitem::where('id',$id)->delete();
       
       
         
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
