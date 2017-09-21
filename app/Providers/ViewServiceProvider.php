<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mexico local must be installed on server with command:
        // sudo /usr/share/locales/install-language-pack es_MX
        //setlocale(LC_ALL, 'es_MX');

        // Register new namespace for the dashboard views
        View::addNamespace('dashboard', base_path('resources/views/dashboard'));

        // Register a view composer for all the views
        //View::composer('*', function ($view) {
        //    $view->with('user', $user = Auth::user());
        //});
    }
}
