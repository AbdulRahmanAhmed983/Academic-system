<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class National extends Model
{
    use HasFactory;


    protected $table = "nationals";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function studentdata(){
        return  $this->hasMany('App/Models/studentdata','national_id','id');
    }
}
