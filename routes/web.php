<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(["prefix"=>"Admin","middleware"=>"auth"],function(){
       Route::resource('category','Acategories');
    Route::resource('chiefs','Acheifs');
    Route::resource('Blates','Ablates');
Route::resource("User","Auser");
Route::get("/contacts","Acontact@index")->name('contacts');

Route::get("/blate",function(){
        return view("products.add");



    });
   });

    Route::get("/steak_house","Front_user@index")->name('steak house');

  //  Route::get("/all","Front_user@all")->name("all");

    Auth::routes();
    Route::post("/contact","Front_user@contact")->name("contact");
Route::get("/main",function (){

    return view("Front_user.layout");
});


