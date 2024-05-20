<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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
    return redirect()->route('login');
})->name('home');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');

Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/index', [AuthController::class, 'index'])->name('index');

Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');

Route::get('/index', [AuthController::class, 'index'])->name('index');


Route::get('/dashboard', function () {
    return view('dashboard'); // Ensure you have a dashboard view
})->name('dashboard')->middleware('auth');

Route::get('/dataKandidat', function () {
    return view('dataKandidat');
})->name('dataKandidat')->middleware('auth');

Route::get('/assessment', function () {
    return view('assessment');
})->name('assessment')->middleware('auth');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan')->middleware('auth');

Route::get('/blog', function () {
    return view('blog');
})->name('blog')->middleware('auth');

Route::get('/quiz', function () {
    return view('quiz');
})->name('quiz')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/pengaturan', function () {
    return view('pengaturan');
})->name('pengaturan')->middleware('auth');

Route::get('/logout', function () {
    return view('login');
})->name('logout')->middleware('auth');



Route::post('/blog/create', [BlogController::class, 'create'])->name('postCreateBlog');


// Uncomment the following line if you want to use the blog route
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');