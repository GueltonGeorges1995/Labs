<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
class AdminServiceController extends Controller
{
    public  function  index(){
        $services =  Service::all();
        return  view ('/admin/adminService',compact('services'));
    }

    public  function  delete($id){
	    $res =  Service::where('id',$id)->delete(); // select le champ et la valeur
	    return  redirect('/admin/service');
    }

    public function create(Request $request){
        
        $services = new Service();
       
        $services->titre = request('serviceTitre');
        $services->text = request('serviceText');
        $services->logo = request('serviceLogo');

        $services->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/service');
    }




    public function indexStore($id){
        $services =  Service::find($id);
        // if(Gate::denies('update-album',$albums)){
        //     abort(403,'message');
        // }
        return  view('/admin/serviceUpdate', compact('services'));
    }

    public function store($id,Request $request)
    {
        $services = Service::find($id);

    

        $services->titre = request('serviceTitre');
        $services->text = request('serviceText');
        $services->logo = request('serviceLogo');

        $services->save();

        
        return redirect('/admin/service');
    }

    
}
