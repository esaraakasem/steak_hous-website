<?php

namespace App\Http\Controllers;
use App\Blates;
use App\Categories;
 use App\Http\Requests\BlatesRequest;
use App\Contacts;

use mysql_xdevapi\Session;
use Illuminate\Http\Request;

//use View;
class Ablates extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blates=Blates::all();

        $contacts=Contacts::select("*")->where('read','=','0')->get();

    return view('admin.Blates.index',compact(['blates','contacts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $categories=Categories::pluck('Name','id')->toArray();

       return view("admin.Blates.Create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlatesRequest $request)


    {
//return response($request);

        $input=$request->all();

        if($file=$request->file("file"))

        {   $name=time().$file->GetClientOriginalName();
            $file->move("images",$name);
           // $image=blate_image::create(["file"=>$name,"blates_id"=>"$blate->id"]);
            $input['file']=$name;


            $blate=Blates::create($input);

        }


return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Respons
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $blate=Blates::find($id);
        $categories=Categories::pluck('Name','id')->toArray();
       // Session::push("previous blate","$blate");
        return view("admin.Blates.edit",compact("blate"),compact("categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $input=$request->all();

       unset($input['_method']);
        unset($input['_token']);
      Blates::find($id)->update($input);

       return  redirect("/Admin/Blates");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blates::destroy($id);
        return redirect("/Admin/Blates");
    }
}
