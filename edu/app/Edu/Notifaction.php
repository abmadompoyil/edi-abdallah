<?php

namespace App\Edu;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notifaction extends Model
{
    protected $fillable = [
        'school_id','type','text','url','supervisor_id','is_read'
    ];

    protected $table = 'notifications';

    public function school(){
        return $this->belongsTo('App\User','school_id');
    }
    public function Super(){
        return $this->belongsTo('App\User','supervisor_id');
    }

    public function urls()
    {
        if ($this->type == 1) {
            if (Auth::user()->isAdmin()) {
                $text = route('jobss.show', $this->url);
                return $text;
            } else if (Auth::user()->isSuperVisor()) {
                if (Auth::user()->isAdmin()) {
                    $text = route('jobs.show', $this->url);
                    return $text;
                } else if (Auth::user()->isSchool()) {
                    $text = route('job.show', $this->url);
                    return $text;
                }


            } elseif ($this->type == 2) {
                if (Auth::user()->isAdmin()) {
                    $text = route('jobss.move.show1', $this->url);
                    return $text;
                } else if (Auth::user()->isSuperVisor()) {
                    $text = route('super.move.show1', $this->url);
                    return $text;
                } else if (Auth::user()->isSchool()) {
                    $text = route('move.show1', $this->url);
                    return $text;
                }

            } else {
                if (Auth::user()->isAdmin()) {
                    $text = route('admin.consults.show', $this->url);
                    return $text;
                } else if (Auth::user()->isSuperVisor()) {
                    $text = route('consults.show', $this->url);
                    return $text;
                } else if (Auth::user()->isSchool()) {
                    $text = route('consult.show', $this->url);
                    return $text;
                }

            }
        }
    }

}
