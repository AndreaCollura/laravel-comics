<header class="bg-white">
    <div class="container header-box px-0">
        <div class="d-flex justify-content-between align-items-center m-0">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div>
                <ul class="d-flex my-0 gap-4">
                    @foreach ($headerlinks as $link)
                        <li>
                            <a :href="{{$link['url']}}">{{$link['text']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
