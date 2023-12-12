@extends('layouts.app')

@section('title', 'Laravel Comics')

@section('main')
    <section class="comics">

        <div class="comic-gallery">
            <div class="container">
                <h1 class="gallery-title">Current Series</h1>
                <div class="grid-wrapper">
                    @foreach ($comics as $comic)
                        <a href="{{ URL::route('details', ['id' => $loop->index]) }}">
                            <div class="grid-item">
                                <div class="item-img">
                                    <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="">
                                </div>
                                <div class="item-title">
                                    <p>{{ $comic['title'] }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <button class="load-more-btn">Load More</button>
            </div>
        </div>

        <div class="comics-nav">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                            Digital Comics
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                                alt="">DC Merchandise
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                                alt="">Subscription
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                alt="">Comic Shop Locator
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                                alt="">DC
                            Power Visa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
