<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
class AdminHomeController extends Controller
{
    public function index(){

        $user= Auth::user();
        
        return view ('/home', compact('user'));
    }

    public function store(Request $request){

        $user= Auth::user();

        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->text = request('text');

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_USR_DIR'));
            $user->imgPath = "storage/".$fileName;
        }
        
        $user->save();

        return redirect('/home');
    }
}
