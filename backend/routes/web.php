<?php

use App\Http\Controllers\AbonnemmentController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CitieController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FavorieController;
use App\Http\Controllers\UserController;
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
    return view('home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/eventsLists',[EvenementController::class, 'ListEvents'])->name('eventsLists');
Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');
Auth::routes();

Route::get('eventCreate',[EvenementController::class, 'index'])->name('eventCreate');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Route::resource('/favourites', FavorieController::class);
Route::resource('/categories', CategorieController::class);
Route::resource('/subscribes', AbonnemmentController::class);
Route::resource('/cities', CitieController::class);
Route::resource('/users', UserController::class);
Route::resource('/events', EvenementController::class);
//Categorie
Route::get('categorie/delete/{id}', [CategorieController::class, 'delete'])->name('delete');
Route::get('editCat/{id}', [CategorieController::class, 'editCat'])->name('editCat');
Route::put('updateCat', [CategorieController::class, 'updateCategorie'])->name('updateCat');
//Citie
Route::get('citie/delete/{id}', [CitieController::class, 'delete'])->name('deleteCitie');
Route::get('editCitie/{id}', [CitieController::class, 'editCitie'])->name('editCitie');
Route::put('updateCitie', [CitieController::class, 'updateCitie'])->name('updateCitie');
