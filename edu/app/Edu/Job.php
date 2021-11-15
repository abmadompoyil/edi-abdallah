<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //id	school_id	teacher_id	time	date	status	result	supervisor_id	created_at	updated_at
    protected $table = 'job';

    protected $fillable = [
        'school_id','teacher_id','teacher_id','supervisor_id','date','start','end','date_id','new_school_id','new_subject_id','other'
    ];

    public function school(){
        return $this->belongsTo('App\User','school_id');
    }
    public function new_school(){
        return $this->belongsTo('App\User','new_school_id');
    }
    public function new_subject(){
        return $this->belongsTo('App\Edu\Subject','new_subject_id');
    }

    public function Teacher(){
        return $this->belongsTo('App\Edu\Teacher','teacher_id');
    }
    public function date(){
        return $this->belongsTo('App\Edu\Date','date_id');
    }

    public function SuperVisor(){
        return $this->belongsTo('App\User','supervisor_id');
    }
    public function comments(){
        return $this->hasMany('App\Edu\Comment');
    }
    public function result(){
        return $this->hasMany('App\Edu\Result');
    }

    public function grade(){
        $average = Result::where('job_id',$this->id)->avg('result');
        $grades = array("91-100"=>"A+","80-89"=>"A","70-79"=>"B","60-69"=>"C","50-59"=>"D","0-49"=>"F");
        $grade = 'Not Yet' ;
        foreach ($grades as $val => $cur_grade) {
            list($min, $max) = explode('-', $val); // split key into min and max
            if ($average >= $min && $average <= $max) { // compare
                $grade = $cur_grade ; // get the value
                break ; // stop the loop
            }
        }
        echo $grade ;
    }

    public function span(){
        $span = 'primary';
        if($this->status == 'pending'){
            $span = 'light ';
        }elseif ($this->status == 'accept') {
            $span = 'primary';
        }elseif ($this->status == 'canceled') {
            $span = 'danger';
        }elseif ($this->status == 'completed') {
            $span = 'success ';
        }elseif ($this->status == 'finished') {
            $span = 'dark ';
        }

        return $span;
    }
}
