<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        if ($query = $request->get('q')) {
            $articles = Article::search($query)->latest()->paginate(12);
        } else {
            $articles = Article::latest()->paginate(12);
        }

        $help = Page::whereSlug('como-ayudar')->first();
        $info = Page::whereSlug('informacion')->first();

        return view('home.index', compact('help', 'articles', 'info'));
    }
}
