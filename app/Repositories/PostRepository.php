<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepository
{
    public function store(StorePostRequest $storePostRequest): void
    {
        $image = null;
        if ($storePostRequest->hasFile('image')) {
            $name = $storePostRequest->image->getClientOriginalName();
            $path = $storePostRequest->image->store('public/images');

            $image = Image::create([
                'name' => $name,
                'path' => $path,
            ]);
        }
        Post::create(
            [
                'image_id' => $image?->id,
                'user_id' => Auth::id(),
                'title' => $storePostRequest->title,
                'introduction' => $storePostRequest->introduction,
                'body' => $storePostRequest->body,
            ]
        );
    }
}
