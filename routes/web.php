<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
// ========================================================

// Route::get('/user', function () {
//     return "user Page!";
// });
// Route::get('/about', function () {
//     return "This is about Page!";
// });
// Route::get('/teachers', function () {
//     $users = [
//         [
//             'name' => 'rady',
//             'posts' => ['Hello !', 'Good bye !'],
//         ],
//         [
//             'name' => 'him',
//             'posts' => ['How are you ?', 'I love mangos !'],
//         ],
//     ];

//     return response()->json($users);
// });

// =================================================================================================

Route::get('users',[UserController::class, 'index']);
Route::get('about',[AboutController::class, 'index']);
Route::get('/client',[ClientController::class, 'index']);
Route::get('/CheckClient',[ClientController::class, 'isClient']);

