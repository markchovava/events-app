<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Info\InfoController;
use App\Http\Controllers\Backend\Role\RoleController;
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

    Route::prefix('clients')->group(function() {
        Route::get('/', [ClientController::class, 'index'])->name('admin.client');
        Route::get('/add', [ClientController::class, 'add'])->name('admin.client.add');
    });
    Route::prefix('infos')->group(function() {
        Route::get('/', [InfoController::class, 'view'])->name('admin.info.view');
        Route::get('/edit', [InfoController::class, 'edit'])->name('admin.info.edit');
        Route::post('/store', [InfoController::class, 'store'])->name('admin.info.store');
        Route::post('/update/{id}', [InfoController::class, 'update'])->name('admin.info.update');
    });

    Route::prefix('roles')->group(function() {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role');
        Route::get('/search', [RoleController::class, 'search'])->name('admin.role.search');
        Route::get('/add', [RoleController::class, 'add'])->name('admin.role.add');
        Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::get('/view/{id}', [RoleController::class, 'view'])->name('admin.role.view');
        Route::post('/update/{id}', [RoleController::class, 'update'])->name('admin.role.update');
        Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('admin.role.delete');
    });

    Route::prefix('users')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/search', [UserController::class, 'search'])->name('admin.user.search');
        Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
        Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::get('/view/{id}', [UserController::class, 'view'])->name('admin.user.view');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
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
