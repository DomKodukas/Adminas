<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;

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

Route::resource('/student', StudentController::class)->middleware(['auth']);
Route::get('send',[HomeController::class,"sendnotification"]);

Route::get('/multiuploads', [UploadController::class,'uploadForm']);
Route::post('/multiuploads', [UploadController::class,'uploadSubmit']);

require __DIR__.'/auth.php';
