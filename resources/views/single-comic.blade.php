@extends('layouts.app')

@section('page_title')
    
@endsection

@section('main_content')
    @include('components.jumbotron')

    {{-- comic-book-cover-section --}}
    <section class="comic-book-section">
        <div class="small_container">
            <div class="comic-cover-card">
                <img src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['series'] }}">

                <div class="comic-book-top-text cover-text">
                    comic book
                </div>

                <div class="comic-book-bottom-text cover-text">
                    view gallery
                </div>
            </div>
        </div>
    </section>

    {{-- comic-description-section --}}
    <section id="comic-description-section">
        <div class="small_container">
            <div class="comic-row">
                <div class="comic-left-col">
                    <h1>{{ $current_comic['title'] }}</h1>

                    <div class="row-price">
                        <div class="left-col-price">
                            <div class="us-price">
                                <span class="green_text">U.S. Price:</span> $19.99
                            </div>
                            <div class="status_available">
                                <span class="green_text">available</span>
                            </div>
                        </div>
                        <div class="right-col-price">
                            check availability <span><i class="fa-solid fa-caret-down"></i></span>
                        </div>
                    </div>

                    <div class="text_description">
                        <p>
                            {{ $current_comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="comic-right-col">
                    <div>advertisment</div>

                    <img src="{{ asset('img/dc-power-visa.jpg') }}" alt="advertisment">
                </div>
            </div>
        </div>
    </section>

    {{-- info-comic-section --}}
    <section id="info_comic_section">
        <div class="small_container">
            <div class="info-row">
                <div class="talent_col">
                    <h3>Talent</h3>

                    <div class="artists-row border_top_grey">
                        <div class="left-artists-col">
                            Art by:
                        </div>
                        <div class="right-artists-col">
                            @foreach ($current_comic['artists'] as $artist )
                                <span class="blue_text">{{ $artist }}</span> @if (!@$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
    
                    <div class="writers-row border_grey">
                        <div class="left-writers-col">
                            Written by:
                        </div>
                        <div class="right-writers-col">
                            @foreach ($current_comic['writers'] as $writer )
                            <span class="blue_text">{{ $writer }}</span> @if (!@$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs_col">
                    <h3>Specs</h3>

                    <div class="series-row border_top_grey">
                        <div class="left-series-col">
                            Series:
                        </div>
                        <div class="blue_text right-series-col">
                            {{ $current_comic['series'] }}
                        </div>
                    </div>
    
                    <div class="us-price-row border_top_grey">
                        <div class="left-price-col">
                            U.S. Price:
                        </div>
                        <div class="right-price-col">
                            {{ $current_comic['price'] }}
                        </div>
                    </div>
    
                    <div class="sale-date-row border_grey">
                        <div class="left-sale-date-col">
                            on sale date:
                        </div>
                        <div class="right-sale-date-col">
                            {{ $current_comic['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- icons-comic-section --}}
    <section id="icons-comic-section">
        <div class="small_container"> 
            <nav class="nav-icons-services">
                <ul>
                    <li class="service-card">
                        <span>Digital comics</span>
                        <div class="icon"></div>
                    </li>
                    <li class="service-card">
                        <span>Shop DC</span>
                        <div class="icon"></div>
                    </li>
                    <li class="service-card">
                        <span>Comic shop locator</span>
                        <div class="icon"></div>
                    </li>
                    <li class="service-card">
                        <span>Subscriptions</span>
                        <div class="icon"></div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection

