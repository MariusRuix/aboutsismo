<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Page;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SavePageRequest;

class PagesController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\View\View
     */
    public function edit($slug)  : View
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('dashboard::pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string $slug
     * @param  \App\Http\Requests\SaveArticleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($slug, SavePageRequest $request) : RedirectResponse
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        $page->update($request->all());

        return redirect()->back()->with('success', 'La pagina se actualizó correctamente');
    }
}
