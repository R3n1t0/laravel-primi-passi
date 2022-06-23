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

        "filosofi_classici" => ["Socrate", "Platone", "Aristotele"],

        "filosofi_patristici" => ["Sant’Ambrogio", "Sant’Agostino"],

        "filosofi_umanistici" => ["Angelo Poliziano", "Erasmo da Rotterdam", "Niccolò Cusano"],

        "filosofi_illuministi" => ["Montesquieu", "Voltaire", "Rousseau", "Thomas Reid", "Kant"]

    ];

    return view('home', $data);
})->name("home");


Route::get("/questions", function (){

    $data = [];

    return view("questions", $data);

})->name("questions");


Route::get("/aboutus", function (){

    $data = [];

    return view("aboutus", $data);

})->name("aboutus");