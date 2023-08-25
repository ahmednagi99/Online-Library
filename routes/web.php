<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

use App\Models\Book;
use App\Http\Controllers\User\AuthUserController;
use App\Http\Controllers\User\StatusController;
use App\Models\book_user;
use App\Models\User;
/*
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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(["middleware"=>"guest:web"],function(){
    Route::resource('/',UserController::class);
    Route::get('/show-file/{file}}',[StatusController::class,'showFile'])->name('file.show');
});

Route::group(["middleware"=>"auth:web",'controller'=>AuthUserController::class],function(){
    Route::get('/dashboard',"index")->name('dashboard');
    Route::get("/logout",'logout')->name('user.logout');
    Route::get('/show-book/{book_name}/{id}','showBook')->name('book.show');
    Route::get('/show-book/{id}','borrowBook')->name('book.borrow');
    Route::get('show-read-books','showReadBooks')->name('book.read.show');
    Route::get('show-borrow-books','showBorrowBooks')->name('book.borrow.show');
    Route::get('/header','header');
    // Route::get('test',function(){
    //     $books=User::with(['books'=>function($q){
    //         $q->where('book_users.read','1');
    //     }])->find(Auth::id());
    //     return $books->books;
    // });
});