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
    return view('home');
});

// Route::get('/', function () {
//     return view('footer');
// });

// Route::get('/', function () {
//     return view('landing');
// });


//  Route::get('/', function () {
//      return view('articles');
//  });

//  Route::get('/aerticles?{article}', function ($slug) {
//     $path = _DIR_ . "/resources/articles/($slug).php";

//     $article = file_get_contents($path);

//     return view('article',[
//         'aarticle'=>$article
//     ]);
// });
