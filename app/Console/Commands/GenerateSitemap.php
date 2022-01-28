<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/login'))
            ->add(Url::create('/registration'))
            ->add(Url::create('/blog'));

        $posts = Post::all();
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/posts/{$post->id}"));
        }
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
