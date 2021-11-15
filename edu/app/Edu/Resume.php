<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'resume','Teacher_id','consult_id'
    ];

    protected $table = 'resume';

    public function Teacher(){
        return $this->belongsTo('App\Edu\Teacher');
    }
    public function consult(){
        return $this->belongsTo('App\Edu\Consult');
    }
}
