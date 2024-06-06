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
    $message = "THIS PAGE: ";
    $page = "Home Page";

    $links = [
        "Home",
        "Contacts",
        "About",
        "Products"
    ];

    $data = [
        'message'   => $message,
        'page'      => $page,
        'links'     => $links
    ];

    return view('welcome', $data);
})->name("/");

Route::get('/test', function () {
    $message = "THIS PAGE: ";
    $page = "Test";

    $data = [
        "message"   => $message,
        "page"      => $page
    ];

    return view('test', $data);
})->name("test");
