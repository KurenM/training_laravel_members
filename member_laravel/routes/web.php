<?php

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

Route::get('/', function () 
{
    return view('welcome');
});


/**
 * 画面遷移
 */
Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');

Route::get('/create', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create');
//新規保存
 Route::post('/store',[App\Http\Controllers\MemberController::class, 'store'])->name('members.store');

 Route::get('/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit');
//更新
Route::post('/update/{id}',[App\Http\Controllers\MemberController::class, 'update'])->name('members.update');

Route::delete('/destroy/{id}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('members.delete');

