<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class days extends Model
{
    protected $fillable = [
        'user_id','Sat','Sun','Mon','Tue','Wed','Thu','Fri'
    ];

    protected $table = 'days';

    public function user(){
        return  $this->belongsTo('App\User');
    }

    public function sat(){

        return  $this->hasOne('App\Edu\day_time','id','Sat') ?? new day_time();
    }

    public function sun(){

        return  $this->hasOne('App\Edu\day_time','id','Sun') ?? new day_time();
    }
    public function mon(){

        return  $this->hasOne('App\Edu\day_time','id','Mon')?? new day_time();
    }
    public function tue(){

        return  $this->hasOne('App\Edu\day_time','id','Tue') ?? new day_time();
    }
    public function wed(){

        return  $this->hasOne('App\Edu\day_time','id','Wed') ?? new day_time();
    }
    public function thu(){

        return  $this->hasOne('App\Edu\day_time','id','Thu') ?? new day_time();
    }
    public function fri(){

        return  $this->hasOne('App\Edu\day_time','id','Fri') ?? new day_time();
    }
}
