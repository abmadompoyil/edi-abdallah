<?php

namespace App\Http\Resources;

use App\Edu\Category;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EduResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        Carbon::setLocale('ar');
//        $time = Carbon::make($this->created_at);
//        $time = $time->diffForHumans();
        $countries = ['السعودية', 'باقي الدول '];
//        $countries = ['أفراد', 'معاهد'];
        $cat = Category::select('id','name')->get();
        return [
            'countries'=>$countries,
            'subjects'=>$cat

        ];
    }
}
