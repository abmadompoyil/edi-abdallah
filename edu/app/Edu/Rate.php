<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'edu_rate';

    protected $fillable = [
        'user_id', 'teacher_id', 'rate', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function teacher()
    {
        return $this->belongsTo('App\User');
    }

}

