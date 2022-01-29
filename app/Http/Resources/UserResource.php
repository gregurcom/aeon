<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'tasks' => $this->tasks->count(),
            'goals' => $this->goals->count(),
            'achievements' => $this->achievements->count(),
            'posts' => $this->posts->count(),
            'city' => $this->city,
            'country' => $this->country,
        ];
    }
}
