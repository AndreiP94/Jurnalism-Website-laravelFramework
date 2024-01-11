<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// routes/web.php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ArticleController;

//Route::get('/register', [RegisterController::class, 'register'])->name('register');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pagina-cititor', function () {
    return view('pagina-cititor');
});
Route::get('/pagina-cititor', [ArticleController::class, 'showCategorizedArticlesCititor']);

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);


//Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [UserController::class, 'register']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);


Route::get('/', [ArticleController::class, 'showCategorizedArticles']);

Route::get('/paginaJurnalist', [ArticleController::class, 'showForm'])->name('paginaJurnalist');
Route::post('/paginaJurnalist', [ArticleController::class, 'paginaJurnalist']);


Route::get('/paginaEditor', function () {
    return view('paginaEditor');
});
Route::get('/paginaEditor', [ArticleController::class, 'showCategorizedArticlesEditor']);

Route::post('/articole/aproba/{id}', [ArticleController::class, 'aprobaArticol'])->name('aproba-articol');
Route::delete('/articole/sterge/{id}', [ArticleController::class, 'stergeArticol'])->name('sterge-articol');


