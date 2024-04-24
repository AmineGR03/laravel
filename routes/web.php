<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Auth;
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

Route::redirect('/', 'blog');
Route::get('/Home',[PagesController::class,'Home']);
Route::get('/blog', [PagesController::class,'Items']);
Route::get('/blog/{item}',[PagesController::class,'Item']);
Route::get('/contact',[PagesController::class,'Contact']);
Route::get('/admin',[PagesController::class,'Admin']);
Route::get('/creation', [PagesController::class,'Item_Creation']);
Route::get('admin/{item}',[PagesController::class,'ItemAdmin']);
Route::get('/create',[PagesController::class,'Creation']);
Route::post('/nvarticle',[PagesController::class,'Store']);
Route::get('/blog/modifier/{id}',[PagesController::class,'Update']);
Route::put('/updateArticle', [PagesController::class, 'UpdateData'])->name('updateArticle');
Route::get('/delete/{id}',[PagesController::class,'DeleteArticle']);
Route::get('/add-auteur',[AuteurController::class,'FormAuteur']);
Route::post('/creation',[AuteurController::class,'AddAuteur']);
Route::get('/add-cat',[CategorieController::class,'Form']);
Route::post('/catcreate',[CategorieController::class,'Insert']);


Route::controller(Auth::class)->group(function(){
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login')->middleware('alreadyLoggedIn');
    Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::get('/logout','logout');
});

