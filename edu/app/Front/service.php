<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'section2_service';
    protected $fillable = [
        'title'	,'sub_title',	'title_en'	,'sub_title_en'	,'icon'	,'section_id',
    ];

}
