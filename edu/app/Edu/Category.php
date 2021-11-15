<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','icon'
    ];
    protected $table = 'edu_categories';

//    public function sub_category(){
//        return  $this->hasMany('App\Haraj\Sub_Category','category_id');
//    }
    public function user(){
        return  $this->hasMany('App\User');
    }
}
