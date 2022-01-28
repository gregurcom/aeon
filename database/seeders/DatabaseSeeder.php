<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Post;
use App\Models\Goal;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create(['avatar' => 'avatar.png']);
        Achievement::factory()->count(10)->create();

        for ($i = 0; $i < 10; $i++) {
            Goal::factory()->create(['user_id' => $this->getRandomUserId()]);
            Task::factory()->create(['user_id' => $this->getRandomUserId()]);
            Post::factory()->create(['user_id' => $this->getRandomUserId()]);
            DB::table('achievement_user')->insert([
                'user_id' => $this->getRandomUserId(),
                'achievement_id' => $this->getRandomAchievementId(),
            ]);
        }
    }

    private function getRandomUserId(): int
    {
        $user = User::inRandomOrder()->first();

        return $user->id;
    }

    private function getRandomAchievementId(): int
    {
        $achievement = Achievement::inRandomOrder()->first();

        return $achievement->id;
    }
}
