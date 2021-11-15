<?php

namespace App\Http\Resources\Std;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherFavResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'rate'=>'4',
            'flag'=>'https://cdn.countryflags.com/thumbs/saudi-arabia/flag-round-250.png',
            'img' =>$this->img,
            'blox_id'=>$this->blox_id,

        ];
    }
}
