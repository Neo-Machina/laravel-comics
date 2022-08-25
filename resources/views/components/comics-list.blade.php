<section id="comics_section">
    <div class="container">
        <div class="current_series">current series</div>

        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <a href="{{ route('single_comic', [
                        'id' =>$comic['id']
                    ]) }}">
                        <div class="comic_card">
                            <img src="{{ $comic['thumb']}} " alt="{{ $comic['series'] }}">
                
                            <h3>{{ $comic['series'] }}</h3>
                        </div>
                    </a>
                </div>  
            @endforeach
        </div>

        <button class="button_comics">load more</button>
    </div>
</section>