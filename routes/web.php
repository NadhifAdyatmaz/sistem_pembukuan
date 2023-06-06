<?php

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

Route::get('/', function () {
    $users = \App\Models\User::get();
    $produks = \App\Models\Produksi::get();
    $distribusis = \App\Models\Distribusi::get();
    $deliveries = \App\Models\Delivery::get();


    return view('welcome', compact('users','produks','distribusis','deliveries'));
});
