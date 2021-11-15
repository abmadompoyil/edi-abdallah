<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    //id	date	start	end	is_book	created_at	updated_at
    protected $fillable = [
        'date','start','end','is_book'
    ];

    protected $table = 'date';

    public function isBook(){
        if ($this->is_book == 0 ){
            return __("Available");
        }else{
            return __("Unavailable");

        }
    }
}
