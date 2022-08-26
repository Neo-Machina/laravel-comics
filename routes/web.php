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


    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics_array = config('comics');

    $icon_menu = [
        [
            'url' => '#',
            'imgSrc' => 'img/buy-comics-digital-comics.png',
            'altImg' => 'digital-comics',
            'text' => 'digital comics'
        ],
        [
            'url' => '#',
            'imgSrc' => 'img/buy-comics-merchandise.png',
            'altImg' => 'dc merchandise',
            'text' => 'dc merchandise'
        ],
        [
            'url' => '#',
            'imgSrc' => 'img/buy-comics-subscriptions.png',
            'altImg' => 'subscription',
            'text' => 'subscription'
        ],
        [
            'url' => '#',
            'imgSrc' => 'img/buy-comics-shop-locator.png',
            'altImg' => 'comic shop locator',
            'text' => 'comic shop locator'
        ],
        [
            'url' => '#',
            'imgSrc' => 'img/buy-dc-power-visa.svg',
            'altImg' => 'visa',
            'text' => 'dc power visa'
        ]
    ];

    return view('comics', ['comics' => $comics_array, 'icons' => $icon_menu]);
})->name('comics');

Route::get('/single-comic/{id}', function ($id) {
    $comics_array = config('comics');
    
    $current_comic = [];

    foreach ($comics_array as $comic) {
        if($comic['id'] == $id) {
            $current_comic = $comic;
        }
    }

    $data = [
        'current_comic' => $current_comic,
    ];

    return view('single-comic', $data);
})->name('single_comic');
