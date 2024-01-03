<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Crud_controller;
use App\Models\User;

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
  $users=User::all();
    return view('welcome',compact('users'));
})->name('welcome');

Route::get('create',[Crud_controller::class,'create'])->name('create');
Route::post('store',[Crud_Controller::class,'store'])->name('store');
Route::get('edit/{id}',[Crud_Controller::class,'edit'])->name('edit');
Route::put('update/{id}',[Crud_Controller::class,'update'])->name('update');
Route::delete('delete/{id}',[Crud_Controller::class,'destroy'])->name('delete');
