<?php

use App\Models\client;
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

Route::get('/create', function(){
    return view('form');
});

Route::post('/create', function(){
    $client = new client();
    $client->First_name = request('fName');
    $client->Last_name = request('lName');
    $client->mobile = request('mobile');
    $client->save();

    session()->flash('status', 'Client Informations sent!');

    return redirect('/create');
});
