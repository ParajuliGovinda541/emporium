<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;



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

Route::get('/',[HomeController::class,'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//route for category
route::get('/category',[CategoryController::class,'index'])->name('category.index');
route::get('/category/create',[CategoryController::class,'create'])->name('category.create');

Route::post('/category',[CategoryController::class,'store'])->name('category.store');
route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');


// route for redirecting to admin and user dashboard
Route::get('/redirect',[HomeController::class,'redirect']);

require __DIR__.'/auth.php';
