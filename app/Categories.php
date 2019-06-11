<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('Name');



    public function blates()
    {
        return $this->hasMany(Blates::class);
    }

}