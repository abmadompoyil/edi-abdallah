<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';

    protected $fillable = [
        'name','result','type','job_id','school_id','supervisor_id',
    ];

    public function school(){
        return $this->belongsTo('App\User','school_id');
    }
    public function Super(){
        return $this->belongsTo('App\User','supervisor_id');

    }
    public function Job(){
        return $this->belongsTo('App\Edu\Job','job_id');
    }
}
