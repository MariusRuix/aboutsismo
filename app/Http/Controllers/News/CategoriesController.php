<?php

namespace App\Http\Controllers\News;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function index($slug)
    {
        $articles = Category::whereSlug($slug)->firstOrFail()->articles()->orderBy('updated_at', 'desc')->paginate(10);
        $category = Category::whereSlug($slug)->first();

        return view('news.categories.index')->with(compact('articles', 'category'));
    }
}
