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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('hello', function () {
    $dataArray = [
        'message' => 'Hello World!'
    ];
    return $dataArray;
    // return response()->json($dataArray); digunakan jika terdapat statuscode misal ->json($dataArray,200)
});

Route::get('debug', function () {
    $dataArray = [
       'message' => 'Hello World!'
    ];

    // dd($dataArray);
    ddd(request());
});
