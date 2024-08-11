<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// routes/web.php

Route::get('/index', function () {
    return view('index');
})->name('index');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');;
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');;
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/main', function () {
    return view('main');
})->name('main');
Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-cart', function () {
    return view('shop-cart');
})->name('shop-cart');
Route::get('/about', function () {
    return view('about');
})->name('about');