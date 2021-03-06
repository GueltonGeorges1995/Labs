<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use Auth;
use App\User;
class AdminCategoryController extends Controller
{
    public function index(){
        $user = Auth::user();
        $categories = Category::all();
        $categoryCount = $categories->count();
      
       
        return  view ('/admin/adminCategory',compact('categories','user','categoryCount'));
    }

    public function create(CategoryRequest $request){
        
        $categories= new Category();
       
        $categories->name = request('name');

        $categories->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/category');
    }
    

    public  function  delete($id){
        $res =  Category::where('id',$id)->delete();
         // select le champ et la valeur
	    return  redirect('/admin/category');
    }


    public function indexStore($id){
        $categories =  Category::find($id);
       
        return  view('/admin/categoryUpdate', compact('categories'));
    }


    public function store($id,CategoryRequest $request){
        
        $categories = Category::find($id);
       
        $categories->name = request('name');

        $categories->save();

        // return  view ('/admin/adminCarousel',compact('carouselitems'));
        return redirect('/admin/category');
    }
}
