<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Gate;

class PostResource extends JsonResource
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
            'image' => $this->image ? $this->image->name : config('app.default_image'),
            'author' => $this->author->name,
            'can' => $this->permissions(),
            'created_at' => $this->created_at->isoformat('Do MMM YY'),
        ];
    }

    protected function permissions(): array
    {
        return [
            'update' => Gate::allows('update-post', $this->resource),
            'delete' => Gate::allows('delete-post', $this->resource),
        ];
    }
}
