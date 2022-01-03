<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Goal;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        for ($i = 0; $i < 10; $i++) {
            Goal::factory()->create(['user_id' => $this->getRandomUserId()]);
        }
        for ($i = 0; $i < 10; $i++) {
            Task::factory()->create(['user_id' => $this->getRandomUserId()]);
        }
        for ($i = 0; $i < 10; $i++) {
            Article::factory()->create(['user_id' => $this->getRandomUserId(), 'image' => 'neon.jpeg']);
        }
    }

    private function getRandomUserId(): int
    {
        $user = User::inRandomOrder()->first();

        return $user->id;
    }
}
