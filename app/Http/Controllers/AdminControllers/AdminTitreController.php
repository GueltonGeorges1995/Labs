<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Titre;
use App\Http\Requests\TitreRequest;

class AdminTitreController extends Controller
{
    public  function  index(){
        $titres =  Titre::find(1);
        return  view ('/admin/adminTitre',compact('titres'));
    }

    public function store(TitreRequest $request)
    {
        $titres = Titre::find(1);

    

        $titres->testimonialTitre = request('testimonialTitre');
        $titres->serviceTitre = request('serviceTitre');
        $titres->teamTitre = request('teamTitre');
        $titres->phoneTitre = request('phoneTitre');
       
        $titres->save();

        
        return redirect('/admin/titre');
    }
}
