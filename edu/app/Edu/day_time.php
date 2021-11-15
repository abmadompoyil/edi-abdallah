<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class day_time extends Model
{
    protected $fillable = [
        'user_id','start','end','day','en_day'
    ];
    protected $table = 'days_time';

    public function user(){
        return  $this->belongsTo('App\User');
    }


}
