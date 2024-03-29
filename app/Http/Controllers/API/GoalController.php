<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Resources\GoalResource;
use App\Models\Goal;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GoalController extends Controller
{
    public function index(): JsonResponse
    {
        $goals = Auth::user()->goals;

        return response()->json(GoalResource::collection($goals), Response::HTTP_OK);
    }

    public function store(StoreGoalRequest $request): JsonResponse
    {
        $goal = Goal::create(array_merge(['user_id' => Auth::id()], $request->validated()));

        return response()->json($goal, Response::HTTP_CREATED);
    }

    public function update(StoreGoalRequest $request, Goal $goal): JsonResponse
    {
        $goal = $goal->update($request->validated());

        return response()->json($goal, Response::HTTP_OK);
    }

    public function delete(Goal $goal): Response
    {
        $goal->delete();

        return response()->noContent();
    }
}
