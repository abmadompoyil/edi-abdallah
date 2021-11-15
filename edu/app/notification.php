<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class notification extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','user_id','message','title','sub_title','data','read','created_at','updated_at'
    ];


    protected $casts = [
        'data' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
