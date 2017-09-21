<?php

namespace App\Http\Controllers\News;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::orderBy('updated_at', 'desc')->paginate(10);

        return view('news.articles.index')->with(compact('articles'));
    }
}
