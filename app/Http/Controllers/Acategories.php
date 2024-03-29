<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
//use View;
class Acategories extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        return view('admin.Categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$this->validate($request,[
        "Name"=>"required"
    ]);
        $input=$request->all();
        $cat=new Categories();
        $cat->Name=$input["Name"];
       $cat->save();
        $categories=Categories::all();

        return back();
       // return response ($cats);
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
         $category=Categories::find($id);
         return view("admin.categories.edit",compact('id','category'));
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
        $cat=Categories::find($id);
        $cat->Name=$request->input('Name');
         $cat->save();
        $categories=Categories::all();

        return view("admin.categories.index",compact("categories"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::destroy($id);
        $categories=Categories::all();
   return redirect("/Admin/category");

    }
}
