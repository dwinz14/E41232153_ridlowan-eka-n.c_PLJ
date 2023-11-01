<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\managementUserController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('admin/profile', function(){
//     //
// })->middleware(CheckAge::class);

// Route::get('/', function() {
//     //
// })->middleware('first', 'second');

// Route::get('/', function() {
//     //
// })->middleware('web');

// Route::group(['middleware' => ['web']], function() {
//     //
// })->middleware('web');

// Route::middleware(['web', 'subscribed'])->group(function () {
//     //
// });

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return "Hello guys!";
// });

// Route::get('/user', [ManagementUserController::class, 'index']);
Route::resource('/user', ManagementUserController::class);

Route::get('/home', function () {
    return view("home");
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::resource('/home', HomeController::class);
});
Route::group(['namespace' => 'Backend'], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pendidikan', PendidikanController::class);
    Route::resource('/pengalaman_kerja', PengalamanKerjaController::class);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/session/create', 'SessionController@create');
Route::get('/session/show', 'SessionController@show');
Route::get('/session/delete', 'SessionController@delete');
