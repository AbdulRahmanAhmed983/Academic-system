<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentdata extends Model
{
    use HasFactory;

    protected $table = "studentdata";
    protected $fillable = [
        'name','email','photo','username','password','mobile','address',
        'national_id','birth_date','country_id','birth_place','national_number','immigration_std','gander',
        'certificate_id','certificate_date','grades','percentage','classfication_id','classficationNotes','milarityNotes',
        'department_id','studyStatus_id','group_id','specialize_id','religion','sit_no','decision_no','decision_date','expiry_date','military_situation','militarystatus_id',
        'military_area','military_No','parent_job','parent_phone','parent_mobile','house_phone','oher_data',
        'created_at','updated_at'
    ];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','name','username','password','photo','specialize_id','studyStatus_id','department_id','group_id');
    }
    public function scopeSelections($query){

        return $query->select('id','name','email','photo','username','password','mobile','address',
        'national_id','birth_date','country_id','birth_place','national_number','immigration_std','gander',
        'certificate_id','certificate_date','classfication_id','grades','percentage','classficationNotes',
        'milarityNotes','department_id','studyStatus_id','group_id','religion','sit_no','specialize_id',
        'decision_no','decision_date','expiry_date','military_situation','militarystatus_id',
        'military_area','military_No','parent_job','parent_phone','parent_mobile','house_phone','oher_data');
    }
    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";
    }
    public function getImmigration_std(){
        return  $this->active == 1 ?  ' وافد' : 'غيروافد';
      }

    public function group(){
        return  $this->belongsTO('App\Models\Group','group_id','id');
    }
    public function country(){
        return  $this->belongsTO('App\Models\Country','country_id','id');
    }
    public function national(){
        return  $this->belongsTO('App\Models\National','national_id','id');
    }
    public function classfication(){
        return  $this->belongsTO('App\Models\Classfication','classfication_id','id');
    }
        public function Certificate(){
            return  $this->belongsTO('App\Models\Certificate','certificate_id','id');
        }
    public function Studystatus(){
        return  $this->belongsTO('App\Models\Studystatus','studyStatus_id','id');
    }
    public function department(){
        return  $this->belongsTO('App\Models\Department','department_id','id');
    }
    public function militarystatus(){
        return  $this->belongsTO('App\Models\Militarystatus','militarystatus_id','id');
    }
    public function spcialize(){
        return  $this->belongsTO('App\Models\Specialize','specialize_id','id');
    }
    

 
}
