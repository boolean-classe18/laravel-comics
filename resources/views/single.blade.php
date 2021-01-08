@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section class="comic-thumb">
        <div class="small-container">
            <div class="comic-thumb-container">
                <div class="comic-thumb-wrapper">
                    <span class="comic-type uppercase">{{ $comic['type'] }}</span>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span class="comic-gallery uppercase">View Gallery</span>
                </div>
            </div>
        </div>
    </section>
    <section id="">
        <div class="small-container">
            <h1>{{ $comic['title'] }}</h1>
        </div>
    </section>
@endsection

@section('page-title', 'Single Comic - Laravel DC Comics')
