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

    $data = [
        'comics' => config('db.comics'),

        'mainlinks' => config('db.mainlinks'),

        'footerlinks' => config('db.footerlinks'),

        'socials' => config('db.socials'),

        'headerlinks' => config('db.headerLinks')
    ];

    /* dd(config('db.mainlinks')); */
    return view('home', $data);
})->name('home');



Route::get('/comics/{id}', function ($id) {

    $data = [
        'comics' => config('db.comics'),

        'mainlinks' => config('db.mainlinks'),

        'footerlinks' => config('db.footerlinks'),

        'socials' => config('db.socials'),

        'headerlinks' => config('db.headerLinks')
    ];

    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comicinfo.comic', $data,  compact('comic'));
    }


   /*  dd(config('db.comic')); */

})->name('comicinfo.comic');
