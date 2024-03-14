<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

        // Route::get('/home', [BookController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Route::get('/user-selectsubject', [BookController::class, 'selectSubject'])->name('select.subject');
    // Route::get('/userComplaint', [BookController::class, 'userComplaint'])->name('user.complaint');
    // Route::get('/book/{id}', [BookController::class, 'addBooktoCart'])->name('addbook.to.cart');
    // Route::patch('/update-userComplaint', [BookController::class, 'updateCart'])->name('update.sopping.cart');
    // Route::delete('/delete-userComplaint', [BookController::class, 'deleteProduct'])->name('delete.cart.product');
    Route::get('/user-selectCourse', [CourseController::class, 'selectCourse'])->name('select.courses');
    Route::get('/userComplaint', [CourseController::class, 'userComplaint'])->name('user.complaint');
    Route::get('/course/{id}', [CourseController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('/update-userComplaint', [CourseController::class, 'updateCart'])->name('update.sopping.cart');
    Route::delete('/delete-userComplaint', [CourseController::class, 'deleteProduct'])->name('delete.cart.product');



});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


