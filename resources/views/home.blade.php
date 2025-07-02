
@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                @foreach($homeItem as $item)
                <div class="col-lg-6">
                    <h1 class="display-4 text-white fw-bold">Hi, {{ $item->name }}</h1>
                    <p class="lead text-white">{{ $item->description }}</p>
                    <a href="{{ $item->cv_link }}" class="btn btn-primary btn-lg mt-3">View My CV</a>
                </div>
                @endforeach
            </div>
        </div>
    </header>

    <!-- Featured Work -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Work</h2>
            <div class="row">
                <?php
                 foreach($featureWork as $featuredWork) 
                 {

                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $featuredWork['image'] }}" class="card-img-top" alt="{{ $featuredWork['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $featuredWork['title'] }}</h5>
                            <p class="card-text">{{ $featuredWork['short_description'] }}</p>
                            <a href="{{ route('portfolio') }}" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <?php
                 }
                ?>
                </div>

            </div>
        </div>
    </section>

@endsection