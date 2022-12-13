<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


    
    public function studentdata(){
        return  $this->hasMany('App/Models/studentdata','group_id','id');
    }

    public function department(){
        return  $this->hasMany('App/Models/Department','group_id','id');
    }
}
