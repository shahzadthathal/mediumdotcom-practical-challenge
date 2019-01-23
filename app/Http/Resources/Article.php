<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'title'=>$this->title,
            'slug'=>$this->slug,
            'image'=>$this->image,
            'description'=>$this->description,
            'clap'=>$this->clap,
            'author'=>$this->user->name,
            'topic_title'=>$this->topic->name,
            'topic_slug'=>$this->topic->slug,
            'clap'=>$this->clap,
            'created_at'=>date("M d,Y", strtotime($this->created_at)),
            'reading_time'=>$this->reading_time,
        ];
    }
}
