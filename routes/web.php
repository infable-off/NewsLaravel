<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello/{name}', static function (string $name){
    return "Hello. $name ";
});
Route::get('/greetings',  function (){
    return view('welcomeUser');
});
Route::get('/info',  function (){
    return view('infoProject');
});
Route::get('/news1',  function (){
    return view('news');
});



//News
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

//Categories
Route::get('/categories', [CategoriesController::class, 'index'])
    ->name('categories.index');
Route::get('/categories/news', [NewsController::class, 'index'])
    ->where('cid', '\d+')
    ->name('news.index');
Route::get('/categories/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->where('cid', '\d+')
    ->name('news.show');
