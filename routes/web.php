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

Route::get('/', 'HomeController@index')->name('home');


//posts Routes
Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/user', 'PostController@user_show')->name('posts.user');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
//Route::get('posts/{id}/delete', 'PostController@delete')->name('posts.delete');
Route::put('posts/{id}', 'PostController@update')->name('posts.update');
Route::get('posts/{id}', 'HomeController@show')->name('posts.show');


Route::get('/myposts', function () {
    return view('posts.myposts');
})->name('posts.myposts');

Route::get('/view', function () {
    return view('posts.show');
})->name('posts.view');




// Admin

Route::group(['middleware' => ['auth', 'admin']], function() {

	Route::get('/adminpanel', function () {
    return view('adminpanel');
	});

	Route::get('/adminpanel', 'AdminpanelController@registered');
	Route::get('/adminpanel/edit/{id}', 'AdminpanelController@edit');
	Route::put('/adminpanel/update/{id}', 'AdminpanelController@update');
	Route::get('/adminpanel/delete/{id}', 'AdminpanelController@delete');

});


/*
Route::get('/view', function () {
    
})->name('posts.view');
*/

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
