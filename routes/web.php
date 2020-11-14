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
Route::get('blog-single', "allContronller@blog_single");
Route::get('contact', "allContronller@contact");
Route::get('department', "allContronller@department");
Route::get('doctor', "allContronller@doctor");
Route::get('index', "allContronller@index");
Route::get('pricing', "allContronller@pricing");
Route::get('google08c1a77a74b877f4.html', function () {
    return view("google08c1a77a74b877f4");
});
Route::get('sitemap', function () {
    SitemapGenerator::create('https://bshau.herokuapp.com/')->writeToFile("sitemap.xml");
    return "sitemap created";
});


