<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheifs extends Model 
{

    protected $table = 'Cheifs';
    public $timestamps = true;
    protected $fillable = array('Name', 'salary','file','job_title');

    public function blates()
    {
        return $this->hasMany(Blates::class);
    }

}