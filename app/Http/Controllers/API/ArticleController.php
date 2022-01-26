<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ArticleController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return ArticleResource::collection(Article::all());
    }

    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }
}
