<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name','name_ar'
    ];
    protected $table = 'subject';

//    public function sub_category(){
//        return  $this->hasMany('App\Haraj\Sub_Category','category_id');
//    }

}
