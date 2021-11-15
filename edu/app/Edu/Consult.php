<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    //school_id	supervisor_id	consult	status
    protected $table = 'consult';

    protected $fillable = [
        'school_id','supervisor_id','consult','status'
    ];

    public function school(){
        return $this->belongsTo('App\User','school_id');
    }


    public function SuperVisor(){
        return $this->belongsTo('App\User','supervisor_id');
    }

    public function comments(){
        return $this->hasMany('App\Edu\Comment');
    }
    public function files(){
        return $this->hasMany('App\Edu\Resume','consult_id');
    }

    public function span(){
        $span = 'primary';
        if($this->status == 'pending'){
            $span = 'secondary ';
        }elseif ($this->status == 'accept') {
            $span = 'primary';
        }elseif ($this->status == 'canceled') {
            $span = 'danger';
        }elseif ($this->status == 'complated') {
            $span = 'success ';
        }

        return $span;
    }
}
