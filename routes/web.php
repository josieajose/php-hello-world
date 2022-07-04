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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world-command', [App\Http\Controllers\MainController::class, 'helloWorldCommand'])->name('hello-world-command')->middleware('hello.world.command');
Route::get('/hello-world-event', [App\Http\Controllers\MainController::class, 'helloWorldEvent'])->name('hello-world-event')->middleware('hello.world.event');
