<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $fillable = ['id','name','group_id','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function studentdata(){
        return  $this->hasMany('App/Models/studentdata','department_id','id');
    }

    public function group(){
        return  $this->belongsTO('App\Models\Group','group_id','id');
    }
    public function specialize(){
        return  $this->hasMany('App/Models/Specialize','department_id','id');
    }







}
