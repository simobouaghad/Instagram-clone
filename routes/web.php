<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/p/create', [PostsController::class, 'create']);
Route::get('/p', [PostsController::class, 'store']);

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.index');




// Route::get('/profile/{user}', [ProfilesController::class, 'index'])->middleware(['auth', 'verified'])->name('profile.show');

// require __DIR__.'/auth.php';



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
