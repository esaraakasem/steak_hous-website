<?php

namespace App;

  use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Blates extends Model 
{

    protected $table = 'blates';
    public $timestamps = true;
    protected $fillable = array('Name', 'categories_id', 'description', 'price',"file");

    public function category(){

         return $this->belongsTo(\App\Categories::class,'categories_id');

    }

   // public function  image(){

     //   $this->hasOne("blate_images");
//}

}