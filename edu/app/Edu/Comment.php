<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';


    protected $fillable = [
        'sender_type','sender_id','note','status','jod_id','consult_id'
    ];



    public function user(){
        return $this->belongsTo('App\User','sender_id');
    }
    public function job(){
        return $this->belongsTo('App\Edu\Job');
    }
 public function consult(){
        return $this->belongsTo('App\Edu\Consult');
    }

    public function files(){
        return $this->hasMany('App\Edu\Resume','result_id');
    }

    public function span(){
        $span = 'primary';
        if($this->status == 'pending'){
            $span = 'secondary ';
        }elseif ($this->status == 'accept') {
            $span = 'primary';
        }elseif ($this->status == 'canceled') {
            $span = 'danger';
        }elseif ($this->status == 'completed') {
            $span = 'success ';
        }

        return $span;
    }
}
