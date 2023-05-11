<?php

use App\Models\Category;
use App\Models\Product;
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
    return view ('welcome', [
        'product' => Product::all()
    ]);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categories',
    App\Http\Controllers\CategoryController::class)->except(['register']);
    
    Route::resource('products',
    App\Http\Controllers\ProductController::class);

    Route::resource('users',
    App\Http\Controllers\UserController::class);

    Route::get('/register', [Laravel\Jetstream\Http\Controllers\RegistrationController::class, 'create'])
      ->middleware(['guest'])
      ->name('register');

    // Route:: get('/register', function (){
    //     return view( 'auth.register');
    // })->name('register');

});

