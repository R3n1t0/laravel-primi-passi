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

    $data = [

        "filosofi_presocratici" => [ "Talete", "Anassimandro", "Anassimene", "Parmenide", "Eraclito", "Pitagora"],

        "filosofi_classici" => ["Socrate", "Platone", "Aristotele"]

    ];

    return view('home', $data);
});
