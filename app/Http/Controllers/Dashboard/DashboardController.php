<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\View\View;

class DashboardController
{
    /**
     * Show the logged in user account.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        return view('dashboard::index');
    }
}
