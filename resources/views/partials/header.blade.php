<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="top-nav">
                        <li>
                            <a href="#">DC Power&#8480; Visa&reg;</a>
                        </li>
                        <li>
                            <a href="#">Additional DC Sites&blacktriangledown;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="header-nav">
        <div class="container">
            <div class="row align-items-center flex-nowrap">

                <div class="col-auto">
                    <a href="#">
                        <img class="header-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                    </a>
                </div>

                <div class="col">
                    <ul class="nav-menu">

                        @php
                            $nav_items = [
                                'characters' => 'Characters',
                                'comics' => 'Comics',
                                'movies' => 'Movies',
                                'tv' => 'TV',
                                'games' => 'Games',
                                'collectibles' => 'Collectibles',
                                'videos' => 'Videos',
                                'fans' => 'Fans',
                                'news' => 'News',
                                'shop' => 'Shop',
                            ];
                        @endphp

                        @foreach ($nav_items as $key => $value)
                            <li class="nav-item">
                                <a @class(['active' => Route::currentRouteName() == $key]) href="{{ URL::route($key) }}">
                                    {!! $key == 'shop' ? $value . ' <span>&blacktriangledown;</span>' : $value !!}
                                </a>
                            </li>
                        @endforeach


                        {{-- <li class="nav-item"><a href="#">Characters</a></li>

                        <li class="nav-item">
                            <a @class(['active' => Route::currentRouteName() == 'comics']) 
                                href="{{ URL::route('comics') }}">Comics
                            </a>
                        </li>

                        <li class="nav-item">
                            <a @class(['active' => Route::currentRouteName() == 'movies']) 
                                href="{{ URL::route('movies') }}">Movies
                            </a>
                        </li>

                        <li class="nav-item"><a href="#">TV</a></li>
                        <li class="nav-item"><a href="#">Games</a></li>
                        <li class="nav-item"><a href="#">Collectibles</a></li>
                        <li class="nav-item"><a href="#">Videos</a></li>
                        <li class="nav-item"><a href="#">Fans</a></li>
                        <li class="nav-item"><a href="#">News</a></li>
                        <li class="nav-item"><a href="#">Shop <span>&blacktriangledown;</span></a></li> --}}
                    </ul>
                </div>

                <div class="col-auto">
                    <div class="nav-search">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>
