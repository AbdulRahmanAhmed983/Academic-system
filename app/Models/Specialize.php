<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialize extends Model
{
    use HasFactory;
    protected $table = "specializes";
    protected $fillable = ['id','name','department_id','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


        public function department(){
            return  $this->belongsTO('App/Models/Specialize','department_id','id');
        }

        public function studentdata(){
            return  $this->hasMany('App/Models/studentdata','specialize_id','id');
        }

        
}
