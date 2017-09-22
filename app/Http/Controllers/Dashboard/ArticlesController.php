<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SaveArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\View\View
     */
    public function index(Request $request) : View
    {
        if ($query = $request->get('q')) {
            $articles = Article::search($query)->latest()->paginate();
        } else {
            $articles = Article::latest()->paginate();
        }

        return view('dashboard::articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Illuminate\View\View
     */
    public function create() : View
    {
        return view('dashboard::articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\SaveArticleRequest $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function store(SaveArticleRequest $request) : RedirectResponse
    {
        $article = new Article($request->all());
        $article->author()->associate(User::findOrFail($request->user()->id));
        $article->save();

        if ($file = $request->file('featured_image')) {
            $article->addMedia($file)->toMediaCollection('featured_image', 'media');
        }

        return redirect()
            ->back()
            ->with('success', 'El registro se creo correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Illuminate\View\View
     */
    public function edit($id) : View
    {
        $article = Article::find($id);

        return view('dashboard::articles.edit', [
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\SaveArticleRequest $request
     * @param  int $id
     * @return Illuminate\Http\RedirectResponse
     */
    public function update(SaveArticleRequest $request, $id) : RedirectResponse
    {
        $article = Article::find($id);

        $article->update($request->all());

        if ($file = $request->file('featured_image')) {
            $article->addMedia($file)->toMediaCollection('featured_image', 'media');
        }

        return redirect()
            ->back()
            ->with('success', 'Se guardaron los cambios correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Illuminate\Http\RedirectResponse
     */
    public function destroy($id) : RedirectResponse
    {
        Article::find($id)->delete();

        return redirect()->back()->with('deleted', [
                'message' => 'El registro se ha eliminado correctamente.',
                'undo' => route('dashboard.videos.restore', $id)
            ]);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param int $id
     * @return Illuminate\Http\RedirectResponse
     */
    public function restore($id) : RedirectResponse
    {
        Article::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Se restableció el registro.');
    }

    /**
     * Archive for the trashed elements.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Illuminate\View\View
     */
    public function trashed(Request $request) : View
    {
        if ($query = $request->get('q')) {
            $articles = Article::onlyTrashed()->search($query)->latest()->paginate();
        } else {
            $articles = Article::onlyTrashed()->latest()->paginate();
        }

        return view('dashboard::articles.trashed', compact('articles'));
    }
}
