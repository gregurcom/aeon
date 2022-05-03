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
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function __construct(private PostRepository $postRepository) {}

    public function index(): JsonResponse
    {
        $posts = $this->postRepository->getPosts();

        return response()->json(PostResource::collection($posts), Response::HTTP_OK);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json(new PostResource($post), Response::HTTP_OK);
    }

    public function store(StorePostRequest $storePostRequest): JsonResponse
    {
        $post = $this->postRepository->store($storePostRequest);

        return response()->json(new PostResource($post), Response::HTTP_CREATED);
    }

    public function update(Post $post, UpdatePostRequest $postRequest): JsonResponse
    {
        $post = $post->update($postRequest->validated());

        return response()->json(new PostResource($post), Response::HTTP_OK);
    }

    public function delete(Post $post): Response
    {
        $post->delete();

        return response()->noContent();
    }
}
