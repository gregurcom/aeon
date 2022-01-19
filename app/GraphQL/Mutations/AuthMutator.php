<?php

declare(strict_types = 1);

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class AuthMutator
{
    public function registration($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $data = Arr::only($args, ['name', 'email', 'password']);
        $user = User::create($data);

        return $user->createToken('auth_token')->plainTextToken;
    }

    public function login($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $credentials = Arr::only($args, ['email', 'password']);
        if (Auth::once($credentials)) {

            return auth()->user()->createToken('API Token')->plainTextToken;
        }

        return null;
    }
}
