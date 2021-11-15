<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'user_id','teacher_id','minute','status','date'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function teacher(){
        return $this->belongsTo('App\User');
    }

    public function status(){
        if ($this->status == 0){
            return 'الدرس جارٍ';
        }elseif($this->status == 1){
            return 'الدرس مكتمل';

        }else{
            return 'ملغي ';

        }
    }
    public function span(){
        $span = 'primary';
        if($this->status == 0){
            $span = 'warning';
        }elseif ($this->status == 1) {
            $span = 'success';
        }

        return $span;
    }
}
