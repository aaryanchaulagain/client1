@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')
    <section class="blog-hero">
        <div class="hero-content">
            <h1>Latest BLOG Updates</h1>
            <p>Insights on study abroad, visas, and student life.</p>
        </div>
    </section>

    <div class="blog-container">
        <div class="blog-grid">

            <article class="blog-card">
                <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2" alt="Canada Jobs">
                <div class="blog-content">
                    <span class="date">Dec 22, 2025</span>
                    <h2>Part-Time Jobs in Canada</h2>
                    <p>Top opportunities for students to work while studying in Canada.</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="{{ asset('image/aryan.jpeg') }}" alt="US Visa">
                <div class="blog-content">
                    <span class="date">Dec 20, 2025</span>
                    <h2>DS-160 Form Guide</h2>
                    <p>Step-by-step instructions for a successful US Visa application.</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>

            <article class="blog-card">
                <img src="https://imgs.search.brave.com/VYDUG50909tDR4xS2QDllKmCys5CuRWkFKK-GSNEgJs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzdmLzI2/LzY2LzdmMjY2Njc4/MWYxYzg2YWIzNWRk/ZDM5NGYyOTY4MmNk/LmpwZw"
                    alt="Study Abroad">
                <div class="blog-content">
                    <span class="date">Dec 16, 2025</span>
                    <h2>Why Study Abroad?</h2>
                    <p>Discover the career and personal benefits of international education.</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>

        </div>
    </div>
@endsection
