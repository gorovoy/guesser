<?php
    
    use App\Http\Controllers\QuestionController;
    use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/check', [HomeController::class, 'check'])->name('check');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/reject', [HomeController::class, 'reject'])->name('reject');
    
Route::resource('questions', QuestionController::class)->withTrashed();