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

    // $data = [
    //     'comics' => $comics_array,
    // ];

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

    $footer_data = [
        'dc_comics' => [
            'title' => 'dc comics',
            'url' => '#',
            'footer_links' => [
                'characters',
                'comics',
                'movies',
                'tv',
                'game',
                'videos',
                'news'
            ]
        ],
        'shop' => [
            'title' => 'shop',
            'url' => '#',
            'footer_links' => [
                'shop DC',
                'shop DC collectibles',
            ]
        ],
        'dc'=> [
            'title' => 'dc',
            'url' => '#',
            'footer_links' => [
                'terms of use',
                'privacy police (new)',
                'ad choices',
                'advertising',
                'jobs',
                'subscriptions',
                'talent workshops',
                'cpsc certificates',
                'ratings',
                'shop help',
                'contact us'
            ]
        ],
        'sites' => [
            'title' => 'sites',
            'url' => '#',
            'footer_links' => [
                'DC',
                'MAD magazine',
                'DC kids',
                'DC universe',
                'DC power visa',
            ]
        ],
        'iconMenuFooter' => [
            [
                'url' => '#',
                'iconImg' => 'img/footer-facebook.png',
                'alt' => 'facebook-icon'
            ],
            [
                'url' => '#',
                'iconImg' => 'img/footer-twitter.png',
                'alt' => 'twitter-icon'
            ],
            [
                'url' => '#',
                'iconImg' => 'img/footer-youtube.png',
                'alt'=> 'youtube-icon'
            ],
            [
                'url' => '#',
                'iconImg' => 'img/footer-pinterest.png',
                'alt' => 'pinterest-icon'
            ],
            [
                'url' => '#',
                'iconImg' => 'img/footer-periscope.png',
                'alt' => 'periscope-icon'
            ]
        ]
    ];

    return view('comics', ['comics' => $comics_array, 'icons' => $icon_menu, 'footer_links' => $footer_data]);
})->name('comics');
