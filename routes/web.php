<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hello;
use App\Http\Controllers\loginController;

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

// Route::get('/', function () {
//     return "sawsan";
// });

// Rout::get('/sawsan',[hello::class,'index']);
// Route::get('/sawsan',hello::class . '@index');

Route::get('/', function () {
    return view('home');
});
// Route::get('/hi','PostController@index');
Route::post('/home.blade.php',loginController::class . '@index');

Route::get('/login', function () {
    return view('login');
});