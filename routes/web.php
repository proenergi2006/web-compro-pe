<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\WebController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/{lang}', function ($locale) {
//     session(['locale' => $locale]);
//     App::setLocale($locale);
//     return view('company.pages.home');
// });

// Route::get('/', [WebController::class, 'index']);
Route::get('/', function () {
    return redirect('/en'); // default redirect ke bahasa Indonesia
});

Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
Route::post('/form-submit', [CandidateController::class, 'store'])->name('form.submit');

Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'en|id']], function () {

    Route::get('/', [WebController::class, 'index']);
    Route::get('/product', function () {
        return view('company.pages.product');
    });
    
    Route::get('/about', function () {
        return view('company.pages.about');
    });
    
    Route::get('/services', function () {
        return view('company.pages.services');
    });
    Route::get('/networks', function () {
        return view('company.pages.networks');
    });

  
    Route::get('/contact', function () {
        return view('company.pages.contact');
    })->name('contact');
    //articles compro
    Route::get('/articles', [WebController::class, 'articles']);
    Route::get('/search-articles', [WebController::class, 'searchArticle'])->name('web.article.search');

    //career
    Route::get('/careers', [WebController::class, 'vacancies']);
    Route::get('/search-careers', [WebController::class, 'searchArticle'])->name('web.article.search');
    // Route::get('/careers', function () {
    //     return view('company.pages.careers');
    // });
});
Route::get('/articles/{slug}', [WebController::class, 'showArticle'])->name('web.article.show');
Route::get('/careers/{slug}', [WebController::class, 'showVacancy'])->name('web.vacancy.show');

Route::get('/pe-admin', function () {
    return view('admin.pages.login');
});
// Auth::routes();
Route::get('admin-signin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin-signin', [LoginController::class, 'login']);
Route::post('signout', [LoginController::class, 'logout'])->name('logout');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

//admin articles management
Route::get('admin-articles', [ArticleController::class, 'index'])->name('admin.articles');
Route::get('add-article', [ArticleController::class, 'create'])->name('add.article');
Route::post('admin-articles', [ArticleController::class, 'store'])->name('store.article');
Route::get('/admin-articles/data', [ArticleController::class, 'getData']);
Route::get('edit-article/{id}', [ArticleController::class, 'edit'])->name('edit.article');
Route::put('edit-article/{article}', [ArticleController::class, 'update'])->name('update.articles');
Route::get('show-article/{article}', [ArticleController::class, 'show'])->name('show.article');
Route::get('/publish-article/{id}', [ArticleController::class, 'publishArticle']);
Route::get('/draft-article/{id}', [ArticleController::class, 'draftArticle']);
Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy']);
Route::get('trashed-articles', [ArticleController::class, 'trashedArticle'])->name('trashed.articles');
Route::post('/restore-articles/{id}', [ArticleController::class, 'restoreArticle']);

//admin products management
Route::get('admin-products', [ProductController::class, 'index'])->name('admin.products');
Route::get('add-product', [ProductController::class, 'create'])->name('add.product');
Route::post('admin-products', [ProductController::class, 'store'])->name('store.product');
Route::get('/admin-products/data', [ProductController::class, 'getData']);
Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('edit.product');
Route::put('edit-product/{product}', [ProductController::class, 'update'])->name('update.product');
Route::get('show-product/{id}', [ProductController::class, 'show'])->name('show.product');
Route::get('/draft-product/{id}', [ProductController::class, 'draftProduct']);
Route::delete('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('trashed-product', [ProductController::class, 'trashedProduct'])->name('trashed.Products');
Route::post('/restore-product/{id}', [ProductController::class, 'restoreProduct']);


});

Route::middleware(['auth', 'role:hr'])->group(function () {
//admin department management
Route::get('admin-department', [DepartmentController::class, 'index'])->name('admin.department');
// Route::get('add-department', [DepartmentController::class, 'create'])->name('add.department');
Route::post('admin-departments', [DepartmentController::class, 'store'])->name('store.department');
Route::get('/admin-department/data', [DepartmentController::class, 'getData']);
Route::get('edit-department/{id}', [DepartmentController::class, 'edit'])->name('edit.department');
Route::put('edit-department/{department}', [DepartmentController::class, 'update'])->name('update.department');
Route::delete('/delete-department/{id}', [DepartmentController::class, 'destroy']);

//admin Vacancies management
Route::get('admin-vacancies', [VacancyController::class, 'index'])->name('admin.vacancies');
Route::get('add-vacancy', [VacancyController::class, 'create'])->name('add.vacancy');
Route::post('admin-vacancies', [VacancyController::class, 'store'])->name('store.vacancy');
Route::get('/admin-vacancies/data', [VacancyController::class, 'getData']);
Route::get('edit-vacancy/{id}', [VacancyController::class, 'edit'])->name('edit.vacancy');
Route::put('edit-vacancy/{vacancy}', [VacancyController::class, 'update'])->name('update.vacancy');
Route::get('show-vacancy/{id}', [VacancyController::class, 'show'])->name('show.vacancy');
Route::delete('/delete-vacancy/{id}', [VacancyController::class, 'destroy']);
Route::get('/publish-vacancy/{id}', [VacancyController::class, 'publishVacancy']);
Route::get('/draft-vacancy/{id}', [VacancyController::class, 'draftVacancy']);

//admin Vacancies management
Route::get('admin-candidates', [CandidateController::class, 'index'])->name('admin.candidates');
// Route::get('add-vacancy', [VacancyController::class, 'create'])->name('add.vacancy');
// Route::post('admin-vacancies', [VacancyController::class, 'store'])->name('store.vacancy');
Route::get('/admin-candidates/data', [CandidateController::class, 'getData']);
Route::get('get-candidate/{id}', [CandidateController::class, 'index_candidate'])->name('get.candidates');
// Route::get('edit-vacancy/{id}', [VacancyController::class, 'edit'])->name('edit.vacancy');
// Route::put('edit-vacancy/{vacancy}', [VacancyController::class, 'update'])->name('update.vacancy');
// Route::get('show-vacancy/{id}', [VacancyController::class, 'show'])->name('show.vacancy');
// Route::delete('/delete-vacancy/{id}', [VacancyController::class, 'destroy']);
// Route::get('/publish-vacancy/{id}', [VacancyController::class, 'publishVacancy']);
// Route::get('/draft-vacancy/{id}', [VacancyController::class, 'draftVacancy']);
});

// Route::get('/company', function () {
//     return view('company.pages.onepage');
// });

// Route::get('/test', function () {
//     return view('company.pages.test');
// });

