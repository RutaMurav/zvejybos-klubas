<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'members'], function(){
   Route::get('', [MembersController::class, 'index'])->name('members.index');
   Route::get('create', [MembersController::class, 'create'])->name('members.create');
   Route::post('store', [MembersController::class, 'store'])->name('members.store');
   Route::get('edit/{members}', [MembersController::class, 'edit'])->name('members.edit');
   Route::post('update/{members}', [MembersController::class, 'update'])->name('members.update');
   Route::post('delete/{members}', [MembersController::class, 'destroy'])->name('members.destroy');
   Route::get('show/{members}', [MembersController::class, 'show'])->name('members.show');
});

Route::group(['prefix' => 'books'], function(){
   Route::get('', [BookController::class, 'index'])->name('book.index');
   Route::get('create', [BookController::class, 'create'])->name('book.create');
   Route::post('store', [BookController::class, 'store'])->name('book.store');
   Route::get('edit/{book}', [BookController::class, 'edit'])->name('book.edit');
   Route::post('update/{book}', [BookController::class, 'update'])->name('book.update');
   Route::post('delete/{book}', [BookController::class, 'destroy'])->name('book.destroy');
   Route::get('show/{book}', [BookController::class, 'show'])->name('book.show');
});
