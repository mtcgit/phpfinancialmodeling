<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('companyprofile', [CompanyProfileController::class, 'search']);
Route::get('companyprofile2', [CompanyProfileController::class, 'search2']);

// Route::resource('companyprofile',CompanyProfileController::class,'search');
// Route::get('/company', function () {
//     return "test";
// });


// Route::resource('blogs',BlogController::class);


// Route::get('company', function () {
//     return "Inertia::render('Dashboard');"
// });
// https://www.youtube.com/watch?v=Vik6oo4O7xo


require __DIR__.'/auth.php';

