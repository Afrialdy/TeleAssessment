<?php

use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\DatakandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkorvideoController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HasiltestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');


/* AuthController */
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/signup', [AuthController::class, 'getSignup'])->name('signup');

Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/signup', [AuthController::class, 'postRegister'])->name('postRegister');

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

/* HasiltestController */
Route::get('/hasil-test/{id}', [HasiltestController::class, 'hasilTest'])->name('hasil-test')->middleware('auth');

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

Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');


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

Route::get('/validasiRendah', function () {
    return view('validation.validasiRendah');
})->name('validationRendah');

Route::get('/validasiTinggi', function () {
    return view('validation.validasiTinggi');
})->name('validationTinggi');

Route::get('/validasiKepribadian', function () {
    return view('validation.validasiKepribadian');
})->name('validationKepribadian');

// Hasil Test Pisikogram
Route::get('/hasil-test', [SkorvideoController::class, 'index']);

// Interview Test List
Route::get('/agreeableness', [SurveyController::class, 'showPersonality'])->name('agreeableness')->defaults('personality', 'Agreeableness');
Route::get('/artistic', [SurveyController::class, 'showPersonality'])->name('artistic')->defaults('personality', 'Artistic');
Route::get('/conscientiousness', [SurveyController::class, 'showPersonality'])->name('conscientiousness')->defaults('personality', 'Conscientiousness');
Route::get('/conventional', [SurveyController::class, 'showPersonality'])->name('conventional')->defaults('personality', 'Conventional');
Route::get('/enterprising', [SurveyController::class, 'showPersonality'])->name('enterprising')->defaults('personality', 'Enterprising');
Route::get('/extraversion', [SurveyController::class, 'showPersonality'])->name('extraversion')->defaults('personality', 'Extraversion');
Route::get('/intelektual', [SurveyController::class, 'showPersonality'])->name('intelektual')->defaults('personality', 'Intelektual');
Route::get('/investigative', [SurveyController::class, 'showPersonality'])->name('investigative')->defaults('personality', 'Investigative');
Route::get('/livecognition', [SurveyController::class, 'showPersonality'])->name('livecognition')->defaults('personality', 'LiveCognition');
Route::get('/neuroticism', [SurveyController::class, 'showPersonality'])->name('neuroticism')->defaults('personality', 'Neuroticism');
Route::get('/openness', [SurveyController::class, 'showPersonality'])->name('openness')->defaults('personality', 'Openness');
Route::get('/perseptual', [SurveyController::class, 'showPersonality'])->name('perseptual')->defaults('personality', 'Perseptual');
Route::get('/psikomotor', [SurveyController::class, 'showPersonality'])->name('psikomotor')->defaults('personality', 'Psikomotor');
Route::get('/realistic', [SurveyController::class, 'showPersonality'])->name('realistic')->defaults('personality', 'Realistic');
Route::get('/social', [SurveyController::class, 'showPersonality'])->name('social')->defaults('personality', 'Social');


