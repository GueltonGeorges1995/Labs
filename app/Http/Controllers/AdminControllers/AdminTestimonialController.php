<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonialitem;
use App\Http\Requests\TestimonialRequest;

class AdminTestimonialController extends Controller
{
    public  function  index(){
        $testimonialitems =  Testimonialitem::all();
        return  view ('/admin/adminTestimonial',compact('testimonialitems'));
    }

    public  function  delete($id){
	    $res =  Testimonialitem::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/testimonial');
    }


    public function create(TestimonialRequest $request){
        
        $testimonialitems = new Testimonialitem();
       
        $testimonialitems->text = request('text');
        $testimonialitems->titre = request('titre');
        $testimonialitems->sousTitre = request('sousTitre');
   
        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_TESTI_DIR'));
            $testimonialitems->imgPath = "storage/".$fileName;
        }

        $testimonialitems->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/testimonial');
    }

    public function indexStore($id){
        $testimonialitems =  Testimonialitem::find($id);
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/testimonialUpdate', compact('testimonialitems'));
    }


    public function store($id,TestimonialRequest $request)
    {
        $testimonialitems = Testimonialitem::find($id);

        $testimonialitems->text = request('text');
        $testimonialitems->titre = request('titre');
        $testimonialitems->sousTitre = request('sousTitre');
   
        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_TESTI_DIR'));
            $testimonialitems->imgPath = "storage/".$fileName;
        }

        $testimonialitems->save();

       

        
        return redirect('/admin/testimonial');
    }

}
