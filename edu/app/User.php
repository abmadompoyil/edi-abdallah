<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use SoftDeletes;

    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','type','code','status','online','img','blox_id','id','role_id','img2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function car(){
        return $this->hasOne('App\Delviery\Car');
    }
    public function Teacher(){
        return $this->hasOne('App\Edu\User');
    }
    public function notify(){
        return $this->hasMany('App\notification');
    }
    public function span(){
        $span = 'primary';
        if($this->status == 'inactive'){
            $span = 'warning';
        }elseif ($this->status == 'active') {
            $span = 'success';
        }

        return $span;
    }
    public function package()
    {
        return $this->hasOne('App\Edu\UserPackage');
    }


    public function teacherFav(){
        return $this->hasMany('App\Edu\Favourite');
    }
    public function device(){
        return $this->hasMany('App\Device');
    }
    public function jobs(){
        return $this->hasMany('App\Edu\Job','school_id');
    }
    public function timeS(){
        Carbon::setLocale(App::getLocale());
        $time = Carbon::make($this->created_at );
        return $time->diffForHumans();
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function isAdmin()
    {
        if ($this->role->name == 'Admin') {
            return true;
        }
        return false;
    }
    public function isSuperVisor()
    {
        if ($this->role_id == 2) {
            return true;
        }
        return false;
    }
    public function isSchool()
    {

        if ($this->role_id == 3) {
            return true;
        }
        return false;
    }
    public function getHome(){
        if (Auth::user()->isAdmin()){
            return redirect('\admin');

        }elseif (Auth::user()->isAdmin()) {
            return redirect('\admin');

        }elseif (Auth::user()->isSuperVisor()) {
            return redirect('\supervisor');

        }elseif (Auth::user()->isSchool()) {
            return redirect('\school');

        }
    }

}
