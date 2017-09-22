<?php

/* @var \Illuminate\Routing\Router $router */
$router->get('/', 'DashboardController@index')->name('dashboard.index');

/* PAGES */
$router->resource('pages', 'PagesController', ['as' => 'dashboard', 'only' => ['edit', 'update']]);

/* IMAGES */
$router->post('uploads/images', 'ImagesController@store')->name('dashboard.uploads.images.store');

/* ARTICLES */
$router->resource('videos', 'ArticlesController', ['as' => 'dashboard', 'except' => 'show']);
$router->post('videos/{id}', 'ArticlesController@restore')->name('dashboard.videos.restore');
$router->get('videos/trashed', 'ArticlesController@trashed')->name('dashboard.videos.trashed');

$router->resource('users', 'UsersController', ['as' => 'dashboard', 'except' => 'show']);
$router->post('users/{id}', 'UsersController@restore')->name('dashboard.users.restore');
$router->get('users/trashed', 'UsersController@trashed')->name('dashboard.users.trashed');
