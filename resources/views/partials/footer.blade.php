@php
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
@endphp

<footer>
    <!-- footer-top -->
    <div class="footer_top container">
        <div class="row">
            <div class="col">
                <h3>{{ $footer_data['dc_comics']['title'] }}</h3>
                
                <ul>
                    @foreach ( $footer_data['dc_comics']['footer_links'] as $link )
                        <li>
                            <a href="{{ $footer_data['dc_comics']['url'] }}">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <h3>{{ $footer_data['shop']['title'] }}</h3>

                <ul>
                    @foreach ( $footer_data['shop']['footer_links'] as $link )
                        <li>
                            <a href="{{ $footer_data['shop']['url'] }}">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h3>{{ $footer_data['dc']['title'] }}</h3>

                <ul>
                    @foreach ( $footer_data['dc']['footer_links'] as $link )
                        <li>
                            <a href="{{ $footer_data['shop']['url'] }}">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach                     
                </ul>
            </div>
            <div class="col">
                <h3>{{ $footer_data['sites']['title'] }}</h3>

                <ul>
                    @foreach ( $footer_data['sites']['footer_links'] as $link )
                        <li>
                            <a href="{{  $footer_data['sites']['url'] }}">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="cookie_policy">
                All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <span class="blue_text">noted here</span>. All rights reserved.
                <span class="blue_text">Cookies Settings</span> 
            </div>
        </div>

        <div class="dc_logo_bg">
            <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo-dc-background">
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="footer_bottom">
        <div class="container">
            <button class="btn_footer">sign-up now!</button>

            <div class="flex-icon_links">
                <h3>follows us</h3>

                <ul>
                    @foreach ( $footer_data['iconMenuFooter'] as $icon )
                        <li>
                            <a href="{{ $icon['url'] }}">
                                <img src={{ asset($icon['iconImg']) }} alt={{ $icon ['alt'] }}>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
