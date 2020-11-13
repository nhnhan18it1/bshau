<?php
use Spatie\Sitemap\SitemapGenerator;


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
// return view("about");
Route::get('about', "allContronller@about");
Route::get('appointment', "allContronller@appointment");
Route::get('blog', "allContronller@blog");
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
Route::get('index', "allContronller@index");

Route::get('pricing', function () {
    return view("pricing");
});
Route::get('googlec6d2fe5d95adad11.html', function () {
    return view("googlec6d2fe5d95adad11");
});
Route::get('sitemap', function () {
    SitemapGenerator::create('https://bshau.herokuapp.com/')->writeToFile("sitemap.xml");
    return "sitemap created";
});


