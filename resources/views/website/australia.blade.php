@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/australia.css') }}">
@endpush

@section('content')

<section class="australia-hero">
    <div class="hero-content">
        <h1>Study in Australia</h1>
        <p>Unlock your potential with world-class education in the land of opportunity.</p>
    </div>
</section>

<section class="info-section">
    <div class="info-container">
        <div class="info-grid">

            <div class="card-box">
                <div class="icon-wrapper">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <h2>Why Australia?</h2>
                <p>Australia is renowned for high-quality education, a vibrant multicultural environment, and immense global career opportunities.</p>
                <a href="#" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card-box">
                <div class="icon-wrapper">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h2>Key Benefits</h2>
                <p>International students enjoy unlimited work rights, cutting-edge research facilities, and a safe, welcoming community.</p>
                <a href="#" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card-box">
                <div class="icon-wrapper">
                    <i class="fas fa-university"></i>
                </div>
                <h2>Top Universities</h2>
                <p>Home to the University of Sydney, Melbourne Uni, and ANU. Experience world-class campuses and innovative learning.</p>
                <a href="#" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="card-box">
                <div class="icon-wrapper">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h2>Our Programs</h2>
                <p>We offer diverse streams including Business, IT, Engineering, Medicine, and Arts tailored for international success.</p>
                <a href="#" class="btn-link">Read More <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>

@endsection
