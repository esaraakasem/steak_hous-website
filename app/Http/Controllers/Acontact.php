<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;

class Acontact extends Controller
{
   public function index()
  {
    $contacts=Contacts::all();
    $con=new Contacts();
    foreach ($contacts as $contact)
    {

      $contact->update(["read"=>1]);

    }

     // return Response($contacts);
    return view('admin.contact',compact('contacts'));


   }


}