<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;

class AdminContactController extends Controller
{
    public  function  index(){
        $contacts =  Contact::find(1);
        return  view ('/admin/adminContact',compact('contacts'));
    }


    public function store(ContactRequest $request){
        $contacts =  Contact::find(1);

        $contacts->titre = request('titre');
        $contacts->text = request('text');

        $contacts->officeTitre = request('officeTitre');
        $contacts->adress = request('adress');

        $contacts->phone = request('phone');
        $contacts->email = request('email');
        
        $contacts->save();

        return  redirect ("/admin/contact");
    }
}
