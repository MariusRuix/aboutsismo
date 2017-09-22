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

//Auth::routes();

/*
 |--------------------------------------------------------------------------
 | Pages
 |--------------------------------------------------------------------------
 */

$router->get('/', 'PagesController@home')->name('page.home');

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

/*
 |--------------------------------------------------------------------------
 | Password Reset
 |--------------------------------------------------------------------------
 */
$router->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$router->post('password/reset', 'Auth\ResetPasswordController@reset');
$router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

/*
 |--------------------------------------------------------------------------
 | Password Reset
 |--------------------------------------------------------------------------
 */
$router->get('password/set', 'Auth\SetPasswordController@create')->name('password.set.create');
$router->post('password/set', 'Auth\SetPasswordController@store')->name('password.set.store');
