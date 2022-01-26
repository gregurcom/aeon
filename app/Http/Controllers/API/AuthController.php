<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegistrationRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return response()->json([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->validated())) {
            return response()->json('Credentials not match', 401);
        }

        return response()->json([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Tokens Revoked']);
    }
}
