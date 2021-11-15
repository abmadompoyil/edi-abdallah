<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table = 'front_most_qouestion';
    protected $fillable = [
        'title',	'title_en',	'sub_title',	'sub_title_en',	'service_id'
    ];


}
