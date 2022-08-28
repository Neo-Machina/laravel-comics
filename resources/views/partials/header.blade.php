<header>
    {{-- Header-top --}}
    <div class="header-top">
        <div class="container flex-header-top">
            <div>
                <a href="#">
                    dc power&#8480; visa&reg;
                </a>
            </div>
            <div>
                <a href="#">
                    addition dc sites <span><i class="fa-solid fa-caret-down"></i></span>
                </a>
            </div>
        </div>
    </div>

    {{-- Header-bottom --}}
    <div class="container">
        <div class="flex-header-bottom">
            <!-- header-logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="logo-dc">
                </a>
            </div>
    
            <!-- header-nav -->
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            characters
                        </a>
                    </li>   
                    <li class="{{ Route::current()->getName() === 'comics' ? 'selected-item' : '' }}
                                {{ Route::current()->getName() === 'single_comic' ? 'selected-item' : '' }}">
                        <a href="{{ route('comics') }}">
                            comics
                        </a>
                    </li>  
                    <li class="{{ Route::current()->getName() === 'movies' ? 'selected-item' : '' }}">
                        <a href="{{ route('movies') }}">
                            movies
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            tv
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            games
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            collectibles
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            videos
                        </a>
                    </li>    
                    <li>
                        <a href="#">
                            fans
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            news
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            shop <span class="blue_caret_down"><i class="fa-solid fa-caret-down"></i></span>
                        </a>
                    </li>      
                </ul>
            </nav>

            {{-- search-bar --}}
            <div class="search">
                <input type="search" name="header-search" placeholder="Search"> 
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</header>