<?php

namespace App\Http\Resources\Std;

use App\Edu\Favourite;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $url =  preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "https://www.youtube.com/embed/$2 ",
            $this->Teacher->video
        );
        $is_favorite = false;
        $fav = Favourite::where('teacher_id',$this->id)->where('user_id',auth('api')->user()->id ?? null)->first();
        if($fav != null){
            $is_favorite = true;
        }
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'rate'=>'4',
            'is_available'=>($this->Teacher->isAvaliableNow() == 1) ? 'إتصال' : 'غير متاح الان ',
            'showBtnCall'=>$this->Teacher->isAvaliableNow(),
            'flag'=>'https://cdn.countryflags.com/thumbs/saudi-arabia/flag-round-250.png',
            'description'=>$this->Teacher->description ,
            'img' =>$this->img,
            'video' =>$url,
            'blox_id' =>$this->blox_id,
            'is_favorite'=>$is_favorite
        ];
    }
}
