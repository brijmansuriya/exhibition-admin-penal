<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

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
Auth::routes();
//Language Translation
// Route::get('index/{locale}', [HomeController::class, 'lang']);
// Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [HomeController::class, 'index'])->name('index');
Route::get('view/{any}', [HomeController::class, 'view']);

Route::group(['middleware' => ['auth'], 'namespace' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::get('/create', [UsersController::class, 'create'])->name('users.create');
        Route::get('/stor', [UsersController::class, 'stor'])->name('users.stor');
        Route::get('/edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::get('/update', [UsersController::class, 'update'])->name('users.update');
        Route::get('/delete', [UsersController::class, 'delete'])->name('users.delete');
    });
});
