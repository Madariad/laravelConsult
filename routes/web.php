<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/{id?}', function (string $id = null) {
//    dd($id);
// })->where('id', '[a-zA-Z]');


Route::get('/test/{id}', function ( $id) {
    // return view('content'); show content
    // return view('yield');

    // $users = 
    // [
    //     ['name' => 'John', 'age' => 13],
    //     ['name' => 'Bella', 'age' => 25],
    //     ['name' => 'Smike', 'age' => 56],

    // ];

    // abort_if(!isset($users[$id]), 404);

    // $user = $users[$id];

    // return view('welcome', ['data' => $user]);



    return view('welcome');



});


Route::get('/t', [PageController::class, 'showHome']);


//general controller
// Route::controller(PageController::class)->group(function() {
//     Route::get('/', 'showHome')->name('home');
//     Route::get('/', 'showBlog')->name('blog');
//     Route::get('/', 'showUser')->name('user');
// });

Route::fallback(function () {
    return "<h1>Page Not found</h1>";
});