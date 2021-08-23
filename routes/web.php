<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

// Route::get('/',[PagesController::class,'index']);
Route::get('/',function () {
    return view('welcome');
});
Route::get('/about',[PagesController::class,'about']);
Route::get('/portfolio',[PagesController::class,'portfolio']);

// Post endpoint
Route::get('posts',[PostsController::class,'index']);
// Route::get('/', function () {
//     return view('homepage');
// });

// Route::get('/users', function () {
//     return 'welcome to users page';
// });

// Route::get('/users', function () {
//     return ['lang'=>'php','framework'=>'laravel'];
// });

// Route::get('/users', function () {
//     return response()->json(['lang'=>'php','framework'=>'laravel']);
// });

// Route::get('/users', function () {
//     return redirect('/');
// });

// Laravel 8.x
// Route::get('/products',
//     [ProductsController::class, 'index'])->name('product');
// Route::get('/products/about',
//     [ProductsController::class, 'about']);

// pattern is integer
// Route::get('/products/{id}',[ProductsController::class, 'show'])->where('id','[0-9]+');

// pattern in string
// Route::get('/products/{name}',[ProductsController::class, 'show'])->where('name','[a-zA-Z]+');

// pattern in string
// Route::get('/products/{name}/{id}',[ProductsController::class, 'show'])->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);

// pattern in multiple 


// Route::get('/products','App\Http\Controllers\ProductsController@index');

// Laravel before 8.x
// Route::get('/products','ProductsController@index');