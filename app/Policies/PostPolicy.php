<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Post $article): bool
    {
        return $user->id === $article->user_id;
    }

    public function delete(User $user, Post $article): bool
    {
        return $user->id === $article->user_id;
    }
}
