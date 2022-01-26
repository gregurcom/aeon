<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'introduction' => $this->introduction,
            'body' => $this->body,
            'image' => $this->image,
            'author' => $this->author->name,
            'created_at' => $this->created_at->isoformat('Do MMM YY'),
        ];
    }
}
