<?php

/* @var \Illuminate\Routing\Router $router */
$router->get('/', 'DashboardController@index')->name('dashboard.index');
/* PAGES */
$router->resource('pages', 'PagesController', ['as' => 'dashboard', 'only' => ['edit', 'update']]);

