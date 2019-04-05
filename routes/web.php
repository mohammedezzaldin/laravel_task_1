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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/create', function () {
    return view('createcategory');
});

Route::get('settings',[
    'uses' => 'SettingsController@index',
    'as' => 'settings'
]);

Route::post('settings/update',[
    'uses' => 'SettingsController@update',
    'as' => 'settings.update'
]);

Route::get('categories',[
    'uses' => 'CategoriesController@index',
    'as' => 'categories.index'
]);

Route::get('category/create',[
    'uses' => 'CategoriesController@create',
    'as' => 'categories.create'
]);

Route::get('category/show/{id}',[
    'uses' => 'CategoriesController@show',
    'as' => 'categories.show'
]);

Route::post('category/store',[
    'uses' => 'CategoriesController@store',
    'as' => 'categories.store'
]);

Route::get('category/edit/{id}',[
    'uses' => 'CategoriesController@edit',
    'as' => 'categories.edit'
]);

Route::post('category/update/{id}',[
    'uses' => 'CategoriesController@update',
    'as' => 'categories.update'
]);


Route::get('category/delete/{id}',[
    'uses' => 'CategoriesController@delete',
    'as' => 'categories.delete'
]);







Route::get('news/create',[
    'uses' => 'NewsController@create',
    'as' => 'news.create'
]);

Route::post('news/store',[
    'uses' => 'NewsController@store',
    'as' => 'news.store'
]);

Route::get('news',[
    'uses' => 'NewsController@index',
    'as' => 'news.index'
]);


Route::get('news/show/{id}',[
    'uses' => 'NewsController@show',
    'as' => 'news.show'
]);

Route::get('news/edit/{id}',[
    'uses' => 'NewsController@edit',
    'as' => 'news.edit'
]);

Route::get('news/delete/{id}',[
    'uses' => 'NewsController@delete',
    'as' => 'news.delete'
]);







Route::get('search',[
    'uses' => 'NewsController@search',
    'as' => 'news.search'
]);
