<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    public function index(): JsonResponse
    {
        $tasks = Auth::user()->tasks()->orderBy('done')->get();

        return response()->json(TaskResource::collection($tasks), Response::HTTP_OK);
    }

    public function store(StoreTaskRequest $request): JsonResponse
    {
        $task = Task::create(array_merge(['user_id' => Auth::id()], $request->validated()));

        return response()->json(new TaskResource($task), Response::HTTP_CREATED);
    }

    public function update(StoreTaskRequest $request, Task $task): JsonResponse
    {
        $task = $task->update($request->validated());

        return response()->json(new TaskResource($task), Response::HTTP_OK);
    }

    public function done(Task $task): JsonResponse
    {
        $task = $task->done == 1 ? $task->update(['done' => 0]) : $task->update(['done' => 1]);

        return response()->json(new TaskResource($task), Response::HTTP_OK);
    }

    public function delete(Task $task): Response
    {
        $task->delete();

        return response()->noContent();
    }
}
