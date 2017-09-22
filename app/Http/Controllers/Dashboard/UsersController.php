<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UsersController extends Controller
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
            $users = User::search($query)->latest()->paginate();
        } else {
            $users = User::latest()->paginate();
        }

        return view('dashboard::users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Illuminate\View\View
     */
    public function create() : View
    {
        return view('dashboard::users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\SaveArticleRequest $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $user = new User(array_merge($request->all(),['password' => 'password', 'provisional_password' => 'password']));
        $user->save();

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
        $user = User::find($id);

        return view('dashboard::users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\SaveArticleRequest $request
     * @param  int $id
     * @return Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $user = User::find($id);

        $user->update($request->all());

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
        User::find($id)->delete();

        return redirect()->back()->with('deleted', [
                'message' => 'El registro se ha eliminado correctamente.',
                'undo' => route('dashboard.users.restore', $id)
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
        User::withTrashed()->find($id)->restore();

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
            $users = User::onlyTrashed()->search($query)->latest()->paginate();
        } else {
            $users = User::onlyTrashed()->latest()->paginate();
        }

        return view('dashboard::users.trashed', compact('users'));
    }
}
