<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
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

    public function store(StorePostRequest $storePostRequest, PostRepository $postRepository): JsonResponse
    {
        $postRepository->store($storePostRequest);

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
