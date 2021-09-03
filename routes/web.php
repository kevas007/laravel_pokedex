<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Http\Client\Response;
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

$response = Http::get('https://app.pokemon-api.xyz/pokemon/1')->json();
// $pokemon = Http::get('https://app.pokemon-api.xyz/pokemon/1');
// response()->json(array('$pokemon'=>$array));

//  dd($response);
    return view('welcome' , compact('response'));
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
