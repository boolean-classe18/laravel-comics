@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            <div class="section-title">
                <h2 class="uppercase">Current Series</h2>
            </div>
            <div class="comic-container">
                @foreach ($series as $item)
                    <div class="comic">
                        <div class="comic-image">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                        </div>
                        <div class="comic-name">
                            <span class="uppercase">
                                {{ $item['series'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('page-title', 'Homepage - Laravel DC Comics')
