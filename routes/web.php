<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Global Patterns
|--------------------------------------------------------------------------
*/

$router->pattern('id', '\d+');
$router->pattern('slug', '[a-z0-9-]+');

/*
 |--------------------------------------------------------------------------
 | Pages
 |--------------------------------------------------------------------------
 */

$router->get('/', 'PagesController@index')->name('page.home');
$router->get('como-ayudar', 'PagesController@help')->name('page.help');
$router->get('mapa-de-ayuda', 'PagesController@maps')->name('page.maps');

/*
 |--------------------------------------------------------------------------
 | Login / Logout
 |--------------------------------------------------------------------------
 */

$router->get('login', 'Auth\LoginController@showLoginForm')->name('session.create');
$router->post('login', 'Auth\LoginController@login')->name('login');
$router->get('logout', 'Auth\LoginController@logout');

/*
 |--------------------------------------------------------------------------
 | News
 |--------------------------------------------------------------------------
 */

$router->get('noticias', 'News\ArticlesController@index')->name('news.articles.index');
$router->get('noticias/{category}', 'News\CategoriesController@index')->name('categories.index');
//$router->get('noticias/{category}/{slug}', 'News\ArticlesController@show')->name('news.articles.show');
