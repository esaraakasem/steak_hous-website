<?php

namespace App\Http\Controllers;

use App\Cheifs;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
//use View;
class Acheifs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $chiefs=Cheifs::all();


     return view('admin.chiefs.index',['chiefs' =>$chiefs ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.chiefs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input=$request->all();

        if($file=$request->file("file"))

        {   $name=$file->GetClientOriginalName();
            $file->move("images",$name);

            $input['file']=$name;


           $c= Cheifs::create($input);


           return back();

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
    public function edit($id)
    {
        $chief=Cheifs::find($id);
        return view ('admin.chiefs.edit',['chief'=>$chief]);

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
        Cheifs::find($id)->update($input);

        return  redirect("/Admin/chiefs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cheifs::destroy($id);
        return redirect('/Admin/chiefs');
    }
}
