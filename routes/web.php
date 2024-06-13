<?php

use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\DatakandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkorvideoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');


/* AuthController */
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');

Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister'); // Ensure this route exists

Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');

Route::get('/index', [AuthController::class, 'index'])->name('index')->middleware('auth');

Route::get('dataKandidat',[UserController::class,'dataKandidat']);
Route::get('user/{id}',[UserController::class,'update']);

/* DatakandidatController */
Route::get('/dataKandidat', [DatakandidatController::class, 'index'])
    ->name('dataKandidat')
    ->middleware('auth');
Route::get('user/{id}',[DatakandidatController::class,'update']);
Route::get('/detail-laporan/{id}', [DatakandidatController::class, 'detailLaporan'])->name('detail-laporan')->middleware('auth');

/* AssessmentController */
Route::get('/assessment', [AssessmentController::class, 'index'])
    ->name('assessment')
    ->middleware('auth');
Route::get('/search', [AssessmentController::class, 'search'])->name('search');
Route::get('/all-users', [AssessmentController::class, 'getAllUsers'])->name('all_users');
Route::get('/filter', [AssessmentController::class, 'filterData'])->name('filter');
Route::get('/hasil-test/{id}', [AssessmentController::class, 'hasilTest'])->name('hasil-test')->middleware('auth');

Route::get('/laporan', function () {
    return view('laporan', [
        'users' => User::orderBy('updated_at', 'desc')->get(),
    ]);
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

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/edit-pertanyaan', function () {
    return view('edit-pertanyaan');
})->name('edit-pertanyaan');

Route::get('/surveyView', function () {
    return view('surveyView');
})->name('surveyView');


// Survey Routes
Route::get('/pertanyaan_test', [SurveyController::class, 'index'])->name('pertanyaan_test');
Route::get('/pertanyaan_test/json/{id}', [SurveyController::class, 'getSurveyJson'])->name('pertanyaan_test.get');
Route::get('/pertanyaan_test/{id}', [SurveyController::class, 'showSurveyView'])->name('pertanyaan_test.show');

Route::get('/api/surveys/{id}', [SurveyController::class, 'getSurvey']);
Route::put('/api/surveys/{id}', [SurveyController::class, 'saveSurvey']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Uncomment the following line if you want to use the blog route
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Pertanyaan Test
Route::get('/cognitive-test', function () {
    return view('pertanyaan.cognitive-test');
})->name('cognitive-test');

Route::get('/cognitive-edit', function () {
    return view('pertanyaan.cognitive-edit');
})->name('cognitive-edit');

Route::get('/validation-test', function () {
    return view('pertanyaan.validation-test');
})->name('validation-test');

Route::get('/validation-edit', function () {
    return view('pertanyaan.validation-edit');
})->name('validation-edit');

// Hasil Test Pisikogram
Route::get('/hasil-test', [SkorvideoController::class, 'index']);
