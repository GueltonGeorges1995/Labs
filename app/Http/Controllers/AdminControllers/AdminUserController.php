<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests\userRequest;

class AdminUserController extends Controller
{
    public function index(){
        $users = User::all();
        $currentUser =  Auth::user();

        return view('/admin/adminUser',compact('users','currentUser'));
    }


    public function create(userRequest $request){
        
        $user = new User();

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_USR_DIR'));
            $user->imgPath = "storage/".$fileName;
        }
       
        $user->name = request('name');
        $user->email = request('email');
        $user->text = request('text');
        $user->password = bcrypt(request('password'));
        $user->role = request('role');

        $user->save();

     
        return redirect('/admin/user');

    }

    public  function  delete($id){
	    $res =  User::where('id',$id)->delete(); 
	    return  redirect('/admin/user');
    }


    public function indexStore($id){
        $user =  User::find($id);

        return  view('/admin/userUpdate', compact('user'));
    }


    public function store($id,userRequest $request)
    {
        $user = User::find($id);

        if($request->hasFile('imgPath')){
            $file = $request->file('imgPath');
            $fileName = $file->store(env('IMG_USR_DIR'));
            $user->imgPath = "storage/".$fileName;
        }

        $user->name = request('name');
        $user->email = request('email');
        $user->text = request('text');
        $user->password = bcrypt(request('password'));
        $user->role = request('role');

        $user->save();
        
        return redirect('/admin/user');
    }
}
