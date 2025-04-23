<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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
    return view('company.pages.home');
});
Route::get('/about', function () {
    return view('company.pages.about');
});
Route::get('/product', function () {
    return view('company.pages.product');
});
Route::get('/services', function () {
    return view('company.pages.services');
});
Route::get('/networks', function () {
    return view('company.pages.networks');
});

//articles compro
Route::get('/articles', [WebController::class, 'articles']);
Route::get('/articles/{slug}', [WebController::class, 'showArticle'])->name('web.article.show');
Route::get('/articles', [WebController::class, 'searchArticle'])->name('web.article.search');


Route::get('/careers', function () {
    return view('company.pages.careers');
});
Route::get('/contact', function () {
    return view('company.pages.contact');
});
Route::get('/pe-admin', function () {
    return view('admin.pages.login');
});
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware('auth');  


// Route::get('/test', function () {
//     return view('company.pages.test');
// });

//admin articles management
Route::get('admin-articles', [ArticleController::class, 'index'])->name('admin.articles');
Route::get('add-article', [ArticleController::class, 'create'])->name('add.article');
Route::post('admin-articles', [ArticleController::class, 'store'])->name('store.article');
Route::get('/admin-articles/data', [ArticleController::class, 'getData']);
Route::get('edit-article/{id}', [ArticleController::class, 'edit'])->name('edit.article');
Route::put('edit-article/{article}', [ArticleController::class, 'update'])->name('update.articles');
Route::get('show-article/{article}', [ArticleController::class, 'show'])->name('show.article');
Route::get('/publish-article/{id}', [ArticleController::class, 'publishArticle']);
Route::get('/publish-article/{id}', [ArticleController::class, 'publishArticle']);
Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy']);
Route::get('trashed-articles', [ArticleController::class, 'trashedArticle'])->name('trashed.articles');
Route::post('/restore-articles/{id}', [ArticleController::class, 'restoreArticle']);


// Auth::routes();
Route::get('admin-signin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin-signin', [LoginController::class, 'login']);
Route::post('signout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
