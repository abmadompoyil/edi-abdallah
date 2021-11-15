<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResourse extends JsonResource
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
        $time = Carbon::make($this->created_at);
        $time = $time->diffForHumans();

        return [
            'id'=>$this->id,
            'comment'=>$this->comment,
            'name'=>$this->user->name ?? "محذوف",
            'time'=>$time,
            'user_id'=>$this->user_id,

        ];    }
}
