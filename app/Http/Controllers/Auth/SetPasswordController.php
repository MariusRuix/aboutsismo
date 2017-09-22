<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class SetPasswordController extends Controller
{
    /**
     * SetPasswordController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for sending the user contact form.
     *
     * @return \Illuminate\View\View
     */
    public function create() : View
    {
        return view('account.password.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, ['password' => 'required|min:6|confirmed']);

        // Update the password and set the provisional to null
        $request->user()->update([
            'password' => $request->password,
            'login_token' => null,
            'provisional_password' => null,
        ]);

        // Extract the intended url from session or default to admin page home
        $intended = session('url.intended', '/');

        return redirect()
            ->to($intended)
            ->with('success', 'Tu contraseña se actualizó correctamente');
    }
}
