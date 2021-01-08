@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section id="series">
        <div class="container">
            <div class="section-title">
                <h2 class="uppercase">Current Series</h2>
            </div>
            <div class="comic-container">
                @foreach ($series as $index => $item)
                    <div class="comic">
                        <a href="{{ route('comic-details', ['id' => $index]) }}">
                            <div class="comic-image">
                                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            </div>
                            <div class="comic-name">
                                <span class="uppercase">
                                    {{ $item['series'] }}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
                <a href="#" class="button">Load More</a>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="features-container">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital Comics">
                    </div>
                    <p class="feature-name uppercase">
                        Digital Comics
                    </p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="DC Merchandise">
                    </div>
                    <p class="feature-name uppercase">
                        DC Merchandise
                    </p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Subscription">
                    </div>
                    <p class="feature-name uppercase">
                        Subscription
                    </p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator">
                    </div>
                    <p class="feature-name uppercase">
                        Comic Shop Locator
                    </p>
                </div><div class="feature">
                    <div class="feature-icon">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="DC Power Visa">
                    </div>
                    <p class="feature-name uppercase">
                        DC Power Visa
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-title', 'Homepage - Laravel DC Comics')
