<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use App\Http\Controllers\DetailProfileController;

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

// Route::get('/home', function () {
//     return view('home');
// });

//Route::get('/user', [ManagementUserController::class, 'index']);
Route::resource('/user', ManagementUserController::class);


Route::group(
    ['namespace' => 'App\Http\Controllers\Frontend'],
    function () {
        Route::resource('/home', HomeController::class);
    }
);

Route::group(
    ['namespace' => 'App\Http\Controllers\Backend'],
    function () {
        Route::resource('/dashboard', DashboardController::class);
    }
);
