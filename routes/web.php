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

Route::get('/ricerca-dischi', function () {
$array_dischi = config('dischi');
$dischi_rock = array_filter($array_dischi, function($album_singolo) {
    return $album_singolo['genere'] == 'rock';
});
$dischi_pop = array_filter($array_dischi, function($album_singolo) {
    return $album_singolo['genere'] == 'pop';
});
$dischi_dance = array_filter($array_dischi, function($album_singolo) {
    return $album_singolo['genere'] == 'dance';
});
$data = [
    'rock' => $dischi_rock,
    'pop' => $dischi_pop,
    'dance' => $dischi_dance
];
    return view('ricerca-dischi', $data);
});
