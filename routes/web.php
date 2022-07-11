<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $comics = config('comics');
    $headerLinks = config('headerLinks');
    $footerLinks = config('footerLinks');
    $mainNav = config('mainNav');

    return view('HomePage', compact('comics', 'headerLinks', 'footerLinks', 'mainNav'));

})->name('home');

Route::get('comic/{id}', function ($id) {

    $comics = config('comics');
    $headerLinks = config('headerLinks');
    $footerLinks = config('footerLinks');
    $mainNav = config('mainNav');

    if($id >= count($comics)) {
        abort('404');
    }

    $comic = $comics[$id];

    return view('comicpage', compact('comic', 'headerLinks', 'footerLinks', 'mainNav'));
    
})->where('id', '[0-9]+')->name('comicpage');