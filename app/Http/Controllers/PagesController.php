<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function help()
    {
        $page = Page::whereSlug('como-ayudar')->first();

        return view('pages.help', compact('page'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function maps()
    {
        $page = Page::whereSlug('mapa-de-ayuda')->first();

        return view('pages.maps', compact('page'));
    }
}
