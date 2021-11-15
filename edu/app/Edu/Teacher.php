<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //	id	name	phone	age	exp	expP	qualification	subject_id	created_at	updated_at
    protected $table = 'Teacher';

    protected $fillable = [
        'name','phone','age','exp','expP','qualification','subject_id','resume','nationality','email','other','old_school_id','school_id','sub_teacher','specialization'
    ];
    protected $casts = [
        'subject_id' => 'array',
        'qualification' => 'array',
    ];
    public function subject2(){
        return $this->belongsTo('App\Edu\Subject');
    }

    public function subjects(){
        return Subject::whereIn('id',$this->subject_id)->get();

    }
    public function subject(){
        $m =  Subject::whereIn('id',$this->subject_id)->get('name');
        $s = '';
        foreach ($m as $ss){
            $s = $s.', '.$ss->name;
        }
        return substr($s,1);
    }

    public function qualifcate (){
        $s = '';  
        foreach ($this->qualification as $ss){
            if ($ss == 'Bachelor'){
                $ss  = 'Bachelor'.'( '.$this->specialization.') ';
            }
            $s = $s.', '.$ss;
        }
        return substr($s,1);
    }
    public function school(){
        return $this->belongsTo('App\User','school_id');
    }
    public function old_school(){
        return $this->belongsTo('App\User','old_school_id');
    }
    public function files(){
        return $this->hasMany('App\Edu\Resume','Teacher_id');
    }
    public function exp(){
       if ($this->exp == 0){
           return __("New Teacher (0)");

       }elseif ($this->exp ==1) {
           return __("1-3 years");

       }elseif ($this->exp == 3) {
           return __("4-7 years");

       }elseif ($this->exp == 4) {
           return __("7-10 years");

       }elseif ($this->exp == 5) {
           return __("10 years & more");

       }

    }
}
