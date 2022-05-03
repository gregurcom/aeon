<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class PostRepository
{
    public function getPosts(): Collection|array
    {
        return QueryBuilder::for(Post::class)
            ->allowedFilters('title')
            ->get();
    }

    public function store(StorePostRequest $storePostRequest): Post
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
        return Post::create(
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
