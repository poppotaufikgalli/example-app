<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
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

/**
 * 
 * 
 * 
Route::get('/', function () {
    $data = [
        "tempat" => "Senggarang",
        "pukul"  => "08",
        "tanggal" => Date('Y-m-d H:i:s')
    ];

    print_r($data);

    var_dump($data);

    echo "apa";
    
    //return view('welcome', $data);
});
*
* */

Route::get('/', [IbuController::class, 'index'])->name('index');
Route::get('/index2', [IbuController::class, 'index2'])->name('index2');
Route::get('/ibu', [IbuController::class, 'index']);
