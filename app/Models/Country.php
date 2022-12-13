<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "countries";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function studentdata(){
        return  $this->hasMany('App/Models/studentdata','country_id','id');
    }

   
}
