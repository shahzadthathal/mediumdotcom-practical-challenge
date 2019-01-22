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
            'description'=>$this->description,
            'clap'=>$this->clap,
            'topic_title'=>$this->topic->name,
            'topic_slug'=>$this->topic->slug,
        ];
    }
}
