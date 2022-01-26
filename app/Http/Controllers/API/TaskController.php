<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return TaskResource::collection(Auth::user()->tasks()->orderBy('done')->get());
    }

    public function store(TaskRequest $request): JsonResponse
    {
        $task = Task::create(array_merge(['user_id' => Auth::id()], $request->validated()));

        return response()->json($task, Response::HTTP_CREATED);
    }

    public function update(TaskRequest $request, Task $task): JsonResponse
    {
        $task->update($request->validated());

        return response()->json($task, Response::HTTP_OK);
    }

    public function done(Task $task): JsonResponse
    {
        $task->done == 1 ? $task->update(['done' => 0]) : $task->update(['done' => 1]);

        return response()->json($task, Response::HTTP_OK);
    }

    public function delete(Task $task): \Illuminate\Http\Response
    {
        $task->delete();

        return response()->noContent();
    }
}
