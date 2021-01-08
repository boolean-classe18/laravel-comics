@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section>
        <div class="container">
            <h1>Ops! Questa pagina non è stata trovata</h1>
            <a href="{{ route('homepage') }}" class="button">
                Torna in homepage
            </a>
        </div>
    </section>
@endsection

@section('page-title', 'Single Comic - Laravel DC Comics')
