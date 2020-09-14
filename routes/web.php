<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,"index"]);
Route::get('/c/{course_id}',[HomeController::class,"c"])->name("single_course");


// admin routes
Route::group(['prefix'=>'admin'], function(){
    Route::view('/',"admin.dashboard")->name("homepage");
    Route::view('/courses/insert',"admin.courseInsert")->name("course_insert");
    Route::match(['get','post'],'/courses', [AdminController::class,'courses'])->name("manage_course");
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
