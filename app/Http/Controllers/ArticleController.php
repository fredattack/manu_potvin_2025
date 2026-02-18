<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CustomerData;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::published()
            ->with('media')
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('Pages.blog.index', [
            'articles' => $articles,
            'customerData' => CustomerData::first(),
        ]);
    }

    public function show(Article $article)
    {
        if (! $article->isPublished()) {
            abort(404);
        }

        return view('Pages.blog.show', [
            'article' => $article,
            'customerData' => CustomerData::first(),
        ]);
    }
}
