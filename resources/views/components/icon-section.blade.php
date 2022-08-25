<section id="icon_section">
    <div class="container">
        <ul>
            @foreach ( $icons as $icon )
                <li>
                    <a href="{{ $icon['url'] }}" >
                        <div class="flex-link">
                            <img src="{{ $icon['imgSrc'] }}" altImg="{{ $icon['altImg'] }}">

                            <div>{{ $icon['text'] }}</div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>