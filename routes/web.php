<?php

use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\FrontendControllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[UserController::class,'welcome'])->name('Home');

Route::get('/logout',[BackendUserController::class,'logout'])->name('Logout');

Route::get('/user-list',[UserController::class,'user_list'])->name('User_List');
Route::get('/user-list/download_pdf',[UserController::class,'user_list_download'])->name('User_List_Download_Pdf');
Route::get('/user-list/download_excel',[UserController::class,'user_list_download_excel'])->name('User_List_Download_Excel');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('Deshboard');

