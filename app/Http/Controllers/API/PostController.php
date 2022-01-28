<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return PostResource::collection(Post::all());
    }

    public function show(Post $post): PostResource
    {
        return new PostResource($post);
    }

    public function store(StorePostRequest $postRequest)
    {
        $image = null;
        if ($postRequest->hasFile('image')) {
            $name = $postRequest->file('image')->getClientOriginalName();
            $path = $postRequest->file('image')->store('public/images');

            $image = Image::create([
                'name' => $name,
                'path' => $path,
            ]);
        }
        Post::create(
            [
                'image_id' => $image?->id,
                'user_id' => Auth::id(),
                'title' => $postRequest->title,
                'introduction' => $postRequest->introduction,
                'body' => $postRequest->body,
            ]
        );

        return response()->json(['message' => 'You have successfully created a post'], Response::HTTP_CREATED);
    }

    public function update(Post $post, UpdatePostRequest $postRequest): JsonResponse
    {
        $post->update($postRequest->validated());

        return response()->json($post, Response::HTTP_OK);
    }

    public function delete(Post $post): \Illuminate\Http\Response
    {
        $post->delete();

        return response()->noContent();
    }
}
