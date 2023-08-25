<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookStatusController;

Route::group(['middleware'=>'guest:admin','controller'=>LoginController::class],function(){
    Route::get('login','getLogin')->name("admin.getlogin");
    Route::post('login','login')->name('admin.login');
});
Route::group(['middleware'=>'auth:admin','controller'=>ProfileController::class],function () {
    Route::get('/profile', 'edit')->name('admin.profile.edit');
    Route::patch("/profile",'update')->name('admin.profile.update');
    Route::get("/logout",'logout')->name('admin.logout');
    Route::delete('/destroy','destroy')->name('admin.profile.destroy');
});

Route::group(['middleware'=>'auth:admin','controller'=>DashboardController::class],function(){
    Route::get("/","index")->name("admin.dashboard");
    Route::get('/users','showUsers')->name('admin.user.show');
    Route::post('/search-user','search')->name('admin.user.search');
});
Route::group(['middleware'=>'auth:admin'],function(){
    Route::resource('/books',BookController::class);
    Route::resource('/borrowed-books',BookStatusController::class);
});