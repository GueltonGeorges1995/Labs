<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Navbaritem;
class AdminNavBarController extends Controller
{
    public  function  index(){
        $navbaritems =  Navbaritem::find(1);
        return  view ('/admin/adminNavBar',compact('navbaritems'));

    }
    
    public function store(Request $request){
        $navbaritems =  Navbaritem::find(1);

        $navbaritems->homePage = request('homePage');
        $navbaritems->servicesPage = request('servicesPage');
        $navbaritems->blogPage = request('blogPage');
        $navbaritems->contactPage = request('contactPage');

        if($request->hasFile('logoPath')){
            $file = $request->file('logoPath');
            $fileName = $file->store(env('IMG_LOGO_DIR'));
            $navbaritems->logoPath = $fileName;
        }

        $navbaritems->save();

        return  view ('/admin/adminNavBar',compact('navbaritems'));
    }
}
