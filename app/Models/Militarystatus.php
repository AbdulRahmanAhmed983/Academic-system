<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Militarystatus extends Model
{
    use HasFactory;

    protected $table = "militarystatus";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function militarystatus(){
        return  $this->hasMany('App/Models/studentdata','militarystatus_id','id');
    }

}
