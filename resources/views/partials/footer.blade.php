<footer>
    <footer>
        <!-- footer-top -->
        <div class="footer_top container">
            <div class="row">
                <div class="col">
                    <h3>{{ $footer_links['dc_comics']['title'] }}</h3>
                    
                    <ul>
                        @foreach ( $footer_links['dc_comics']['footer_links'] as $link )
                            <li>
                                <a href="{{ $footer_links['dc_comics']['url'] }}">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <h3>{{ $footer_links['shop']['title'] }}</h3>

                    <ul>
                        @foreach ( $footer_links['shop']['footer_links'] as $link )
                            <li>
                                <a href="{{ $footer_links['shop']['url'] }}">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <h3>{{ $footer_links['dc']['title'] }}</h3>

                    <ul>
                        @foreach ( $footer_links['dc']['footer_links'] as $link )
                            <li>
                                <a href="{{ $footer_links['shop']['url'] }}">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach                     
                    </ul>
                </div>
                <div class="col">
                    <h3>{{ $footer_links['sites']['title'] }}</h3>

                    <ul>
                        @foreach ( $footer_links['sites']['footer_links'] as $link )
                            <li>
                                <a href="{{  $footer_links['sites']['url'] }}">
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
                        @foreach ( $footer_links['iconMenuFooter'] as $icon )
                            <li>
                                <a href="{{ $icon['url'] }}">
                                    <img src={{ $icon['iconImg'] }} alt={{ $icon ['alt'] }}>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</footer>