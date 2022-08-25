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

                    <img src="{{ asset('img/adv.jpg') }}" alt="advertisment">
                </div>
            </div>
        </div>
    </section>
@endsection