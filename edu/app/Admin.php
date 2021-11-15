<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','img','role','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        if ($this->role == 1 ){
            return 'مدير مسئول';
        }elseif ($this->role == 2){
            return 'مشرف';
        }elseif ($this->role == 3){
            return 'مراقب';
        }
    }

    public function span(){
        $span = 'primary';
        if($this->role == 1){
            $span = 'primary';
        }elseif ($this->role == 2) {
            $span = 'warning';
        }elseif ($this->role == 3) {
            $span = 'success';
        }

        return $span;
    }
}
