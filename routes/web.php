<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\About\AboutController;
use App\Http\Controllers\Frontend\Client\ClientController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\Event\EventController;
use App\Http\Controllers\Frontend\Home\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');

Route::prefix('events')->group(function() {
    Route::get('/', [EventController::class, 'index'])->name('frontend.event');
    Route::get('/event', [EventController::class, 'view'])->name('frontend.event.view');
    Route::get('/register', [EventController::class, 'register'])->name('frontend.event.register');
});

Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::get('/client/register', [ClientController::class, 'register'])->name('frontend.client.register');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::prefix('users')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
    });
});




Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
