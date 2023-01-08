@extends('layouts.app')

@section('main-content')
<div id="comicSpecs">
    <div class="current-comic">
        <div class="container position-relative">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}} pic" class="position-absolute border border-light">
        </div>
    </div>
    <div class="comic-infos d-flex align-items-center container">
        <div class="info-box">
            <h4>{{$comic->title}}</h4>
            <div class="price-availability d-flex justify-content-center align-items-center text-white my-3">
                <div class="pa-left d-flex justify-content-between align-items-center px-4 py-2">
                    <span class="price">
                        <span>u.s. Price</span>
                        <span>{{$comic->price}}</span>
                    </span>
                    <span class="availability text-uppercase">
                        available
                    </span>
                </div>
                <div class="pa-right d-flex justify-content-center align-items-center">
                    <span>Check availability</span>
                </div>
            </div>
            <div class="comic-description">
                {{$comic->description}}
            </div>
        </div>
        <div class="adv d-flex flex-column text-secondary fw-bold p-4">
            <div class="align-self-end">
                <span class="text-uppercase">advertisement</span>
            </div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv pic">
        </div>
    </div>
    <div class="more-infos">
        <div class="container d-flex align-items-start">
            <div class="talent p-4">
                <h4>Talent</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Art by</span>
                    <span>/</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Written by</span>
                    <span>/</span>
                </div>
            </div>
            <div class="specs p-4">
                <h4>Specs</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <span>Series</span>
                    <span class="text-uppercase text-primary">{{$comic->series}}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>U.S. Price</span>
                    <span>{{$comic->price}}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>On Sale Date</span>
                    <span>{{$comic->sale_date}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="browse-sections">
        <div class="container d-flex justify-content-around align-items-center">
            <div>digital comics</div>
            <div>shop dc</div>
            <div>comic shop locator</div>
            <div>subscriptions</div>
        </div>
    </div>
</div>
@endsection
