<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function save(RegistrationRequest $request): User
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'country' => $request->country,
        ]);
    }
}
