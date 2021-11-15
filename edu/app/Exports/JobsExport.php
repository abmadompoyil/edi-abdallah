<?php

namespace App\Exports;

use App\Edu\Job;
use Maatwebsite\Excel\Concerns\FromCollection;

class JobsExport implements FromCollection
{
    public function __construct($id,$type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        if ($this->id != null){

            $jobs =  Job::where('type',$this->type)->where('school_id',$this->id)->with(["school", "Teacher"])->get() ;
            $collect = collect();
            foreach ($jobs as $job){
                $job->school_name = ($job->school->name);
                $job->Teacher_name = ($job->Teacher->name);
                $job->sbuject = ($job->Teacher->other ?? $job->Teacher->subject->name);

            }
            return  $jobs;
        }else{
        $jobs =  Job::where('type',$this->type)->with(["school", "Teacher"])->get() ;
            foreach ($jobs as $job){
                $job->school_name = ($job->school->name);
                $job->Teacher_name = ($job->Teacher->name);
                $job->sbuject = ($job->Teacher->other ?? $job->Teacher->subject->name);

            }
            return  $jobs;
        }
    }
}
