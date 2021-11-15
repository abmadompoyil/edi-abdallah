<?php

namespace App\Http\Resources\Driver;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class NotifyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        Carbon::setLocale('ar');
        $time = Carbon::make($this->created_at );
        $since = $time->diffForHumans();
//        dd($this->data);
//        return  $sub;
        return [
            'id'=>$this->id,
            'message'=>$this->message,
            'title'=>$this->title,
            'sub_title'=>$this->sub_title,
            'read'=>$this->read,
            'click_action' =>$this->data['type'] ?? null,
            'data_id' =>$this->data['id'] ?? null,
            'time' => $since
        ];
    }

}
