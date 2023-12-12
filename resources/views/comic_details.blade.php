@php
    $id = request('id');
    $title = $comics[$id]['title'];
    $description = $comics[$id]['description'];
    $thumb = $comics[$id]['thumb'];
    $price = $comics[$id]['price'];
    $series = $comics[$id]['series'];
    $sale_date = date_format(date_create($comics[$id]['sale_date']), 'M d Y');
    $type = $comics[$id]['type'];
@endphp

@extends('layouts.app')

@section('title', $title)

@section('main')
    <section class="comic-details">
        <div class="comic-thumb">
            <div class="container thumb-wrapper">
                <img src="{{ $thumb }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center gap-5">
                <div class="col comic-info">
                    <h1 class="comic-title">{{ $title }}</h1>
                    <div class="comic-availability">
                        <div class="row align-items-center m-0">
                            <div class="col-9 price-info ">
                                <span>U.S. Price: {{ $price }}</span>
                                <span>Available</span>
                            </div>
                            <div class="col availability">Check Availability &blacktriangledown;</div>
                        </div>
                    </div>
                    <p class="comic-description">{{ $description }}</p>
                </div>
                <div class="col-auto">
                    <h4>Advertisement</h4>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}">
                </div>
            </div>
        </div>
        <div class="specs">
            <div class="container">
                <div class="row gap-5">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <h3>Talent</h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Art by:</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fugit. </td>
                                </tr>
                                <tr>
                                    <td>Written by:</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fugit. </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td colspan="2">
                                        <h3>Specs</h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Series:</td>
                                    <td><a class="series-link" href="#">{{ $series }}</a> </td>
                                </tr>
                                <tr>
                                    <td>U.S Price:</td>
                                    <td>{{ $price }} </td>
                                </tr>
                                <tr>
                                    <td>On Sale Date:</td>
                                    <td>{{ $sale_date }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="details-nav">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            Digital Comics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Shop DC
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Comic Shop Location
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Subscription
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
