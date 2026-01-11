@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<section class="hero">
        <h1>About Us</h1>
    </section>

    <section class="intro-mission-section">
        <div class="container">
            <div class="intro-mission-grid">
                <div class="card">
                    <h2>Who We Are</h2>
                    <p>Oz Connect Consultancy is Nepal’s premier education consultancy dedicated to guiding students toward their dream careers abroad. With personalized mentorship and expert guidance, we ensure every student gets the roadmap to success they deserve.</p>
                </div>

                <div class="card">
                    <h2>Our Mission</h2>
                    <p>Our mission is to empower students by providing ethical and professional consultancy services. We aim to bridge the gap between ambition and opportunity by creating life-changing educational pathways for aspiring students.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ceo-section">
        <div class="container">
            <div class="ceo-wrapper">
                <div class="ceo-message">
                    <h2>Message from Our CEO</h2>
                    <p>"At Oz Connect, we believe that every student has the potential to achieve greatness. Our goal is to guide, support, and inspire students throughout their educational journey, ensuring they make informed decisions and unlock their full potential. We are committed to building a trusted consultancy that turns dreams into tangible success stories."</p>
                    <br>
                    <strong>- Aryan, CEO & Founder</strong>
                </div>
                <div class="ceo-image">
                    <img src="{{ asset('image/aryan.jpeg') }}" alt="CEO of Oz Connect Consultancy">
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2>Meet Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('image/bullet.png') }}" alt="Team Member">
                    <h3>Bullet</h3>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/bullet.png') }}" alt="Team Member">
                    <h3>Jane Smith</h3>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/aryan.jpeg') }}" alt="Team Member">
                    <h3>Mike Johnson</h3>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/aryan.jpeg') }}" alt="Team Member">
                    <h3>Emily Davis</h3>
                </div>
            </div>
        </div>
    </section>

@endsection
