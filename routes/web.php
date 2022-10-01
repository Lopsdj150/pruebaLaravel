<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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





//laravel9.test (indica la direccion)
// Route::get('/', function () {
//     return 'Index';
//     // return view('welcome');
// });
//laravel9.test=>welcome
Route::view('/','welcome')->name('home');
//persona-site=>contacto=>contact
Route::view('/contact','contact')->name('contact');

//persona-site/blog=>blog
Route::get('/blog',[PostController::class,'index'])->name('blog');

//persona-site/about=>about
Route::view('/about','about')->name('about');

//persona-site/welcome

