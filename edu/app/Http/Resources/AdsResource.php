<?php

namespace App\Http\Resources;

use App\Haraj\Comment;
use App\Http\Resources\CommentResourse;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
class AdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($request->all());
        Carbon::setLocale('ar');
        $time = Carbon::make($this->created_at);

        $since = $time->diffForHumans();
        $comment = CommentResourse::collection(Comment::where('ads',$this->id)->get());
//        return parent::toArray($request);

        if($this->category_id == 17) {
            return [
                'name' => $this->name,
                'descreption' => $this->description,
                'price' => $this->price,
                'user_name' => $this->user->name  ?? "محذوف",
                'phone' => $this->phone,
                'city' => $this->city->name ?? null,
                'id' => $this->id,
                'sub_category' =>isset($this->sub_category->name) ? $this->sub_category->name : "لا يوجد",
                'category' =>$this->category->name ?? null,
                'img' => $this->imgs,
                'since' => $since,
                'model' =>$this->model,
                'type' =>$this->type,
                'user_id'=>$this->user_id,
                'comment' => $comment,
            ];
        }else {
            return [
                'name' => $this->name,
                'descreption' => $this->description,
                'price' => $this->price,
                'user_name' => $this->user->name,
                'phone' => $this->phone,
                'city' => $this->city->name,
                'id' => $this->id,
                'img' => $this->imgs,
                'sub_category' =>$this->sub_category->name ?? null,
                'category' =>$this->category->name ?? null,
                'since' => $since,
                'user_id'=>$this->user_id,
                'comment' => $comment,
            ];
        }
    }
}
