<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\User;
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
    $articles = Article::all();
    return view('welcome', compact("articles"));
});

Auth::routes();

Route::get('/home', function() {
    $articles = Article::all();
    $users = User::all();
    return view('home', compact("articles", "users"));
})->name('home')->middleware('IsAdmin');

Route::get("/contact", [MailController::class, "index"]);
Route::get("/mails", [MailController::class, "indexBackendMail"]);
Route::post("/mail/store", [MailController::class, "store"]);

Route::resource('articles', ArticleController::class);
Route::resource('users', UserController::class);
Route::resource("mails", MailController::class);