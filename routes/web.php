<?php

use App\Http\Controllers\ProjectController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/wego/main', function () {
    return view('front/main');
})->name('main');

Route::get('/wego/makeProject', function () {
    return view('front/makeProject');
})->name('makeProject');

// Route::get('/wego/projectList', function () {
//     return view('front/projectList');
// })->name('projectList');

Route::get('/wego/minutesList', function () {
    return view('front/minutesList');
})->name('minutesList');

Route::post('/wego/makeMinutes', function () {
    return view('front/makeMinutes');
})->name('makeMinutes');

Route::post('/wego/projectStore', [ProjectController::class, 'store']);

Route::get('/wego/projectList', [ProjectController::class, 'list'])->name('projectList');


require __DIR__.'/auth.php';
