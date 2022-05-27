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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function (){
        Route::get('/', 'IndexController')->name('admin.main');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'user'], function (){
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function (){
        Route::get('/', 'IndexController')->name('admin.posts.index');
        Route::get('/create', 'CreateController')->name('admin.posts.create');
        Route::post('/', 'StoreController')->name('admin.posts.store');
        Route::get('/{posts}', 'ShowController')->name('admin.posts.show');
        Route::get('/{posts}/edit', 'EditController')->name('admin.posts.edit');
        Route::patch('/{posts}', 'UpdateController')->name('admin.posts.update');
        Route::delete('/{posts}', 'DestroyController')->name('admin.posts.destroy');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function (){
        Route::get('/', 'IndexController')->name('admin.categories.index');
        Route::get('/create', 'CreateController')->name('admin.categories.create');
        Route::post('/', 'StoreController')->name('admin.categories.store');
        Route::get('/{categories}', 'ShowController')->name('admin.categories.show');
        Route::get('/{categories}/edit', 'EditController')->name('admin.categories.edit');
        Route::patch('/{categories}', 'UpdateController')->name('admin.categories.update');
        Route::delete('/{categories}', 'DestroyController')->name('admin.categories.destroy');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function (){
        Route::get('/', 'IndexController')->name('admin.tags.index');
        Route::get('/create', 'CreateController')->name('admin.tags.create');
        Route::post('/', 'StoreController')->name('admin.tags.store');
        Route::get('/{tags}', 'ShowController')->name('admin.tags.show');
        Route::get('/{tags}/edit', 'EditController')->name('admin.tags.edit');
        Route::patch('/{tags}', 'UpdateController')->name('admin.tags.update');
        Route::delete('/{tags}', 'DestroyController')->name('admin.tags.destroy');
    });

});
