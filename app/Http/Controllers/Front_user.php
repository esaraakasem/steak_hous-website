<?php

namespace App\Http\Controllers;

use App\Blates;
use App\Categories;
use App\Cheifs;
use App\Contacts;
use http\Env\Response;
use Illuminate\Http\Request;

class Front_user extends Controller
{
    public function index(){
       $count=(Blates::all()->count())/2;

        $blates=Blates::all()->take($count);
        $blates2=Blates::all()->where("id",">",$count);

            $ca=Categories::all();
        $chiefs=Cheifs::all();
       // return Response($ca);

        return view("welcome",compact(["ca","blates","blates2","chiefs"]));


    }


 public function all()
 {


 }
public function contact(Request $request ){




        Contacts::create($request->all());
   return back();
    //return back("/welcome")->withinput(["tab"=>"contact"]);

}


}
