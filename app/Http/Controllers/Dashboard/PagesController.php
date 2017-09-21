<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('dashboard::pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string                                $slug
     * @param \Illuminate\Http\Request               $request
     *
     * @return \Admin\Http\Controllers\Response
     */
    public function update($slug, Request $request)
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        $page->update($request->all());

        return redirect()->back()->with('success', 'La pagina se actualizó correctamente');
    }
}
