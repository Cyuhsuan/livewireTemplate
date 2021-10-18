<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Container;
use App\Http\Livewire\IsLogin;

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

Route::get('/', Home::class);
Route::get('/container', Container::class);
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/islogin', IsLogin::class);
});
