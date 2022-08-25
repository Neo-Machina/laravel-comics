@extends('layouts.app')

@section('page_title')
    
@endsection

@section('main_content')
    @include('components.jumbotron')

    {{-- comic-book-cover --}}
    <div class="comic-book-section">
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
    </div>
@endsection