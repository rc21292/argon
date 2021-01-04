<?php

use Illuminate\Support\Facades\Route;

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
	if(!empty(Auth::user())){
		return redirect()->route('dashboard');
	}

	return view('admin.login');

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function()
{
	Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('dashboard');
	Route::resource('product','App\Http\Controllers\Admin\ProductController');

});

