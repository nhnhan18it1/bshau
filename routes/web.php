<?php



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

Route::get('/',"allContronller@index");
Route::get('about', function () {
    return view("about");
});
Route::get('appointment', function () {
    return view("appointment");
});
Route::get('blog', function () {
    return view("blog");
});
Route::get('blog-single', function () {
    return view("blog-single");
});
Route::get('contact', function () {
    return view("contact");
});
Route::get('department', function () {
    return view("department");
});
Route::get('doctor', function () {
    return view("doctor");
});
Route::get('index', function () {
    return view("index");
});

Route::get('pricing', function () {
    return view("pricing");
});


