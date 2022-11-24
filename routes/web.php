<?php

use App\Http\Controllers\UserController;
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
    // return view('welcome');
    echo Invoice::companyName();
    echo "<br />";
    echo Invoice::currentDate();

});




Route::get('users', [UserController::class, 'index'])->name('users.index');


Route::get('users', [UserController::class, 'users'])->name('users.users');
Route::get('persons', [UserController::class, 'persons'])->name('persons.persons');



Route::get('users/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::delete('users/{user}', [UserController::class, 'edit'])->name('users.delete');

Route::get('persons/{user}', [UserController::class, 'edit'])->name('persons.edit');
Route::delete('persons/{user}', [UserController::class, 'edit'])->name('persons.delete');
