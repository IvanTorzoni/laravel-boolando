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
    $products = config("products.products");
    $data = [
        "products" => $products

    //visualizzazione del array (die incluso)
    // dd($products);
    ];
    return view('home', $data);

})->name("home");
Route::get('/kid', function () {
    return view('kid');
})->name("kid");
Route::get('/man', function () {
    return view('man');
})->name("man");
Route::get('/woman', function () {
    return view('woman');
})->name("woman");
