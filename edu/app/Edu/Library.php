<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [
        'src','name','user_id','type','is_Avalibale'
    ];

    protected $table = 'library';

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function status(){
        if ($this->is_Avalibale == 0){
            return 'Available  ';
        }else{
            return 'Unavailable';
        }
    }
    public function statusRev(){
        if ($this->is_Avalibale == 1){
            return 'Available  ';
        }else{
            return 'Unavailable';
        }
    }
}
