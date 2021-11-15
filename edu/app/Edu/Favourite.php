<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $table = 'favorite';
    protected $fillable = [
        'user_id', 'teacher_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function Teacher()
    {
        return $this->belongsTo('App\User');
    }
}
