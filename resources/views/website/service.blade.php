@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/service.css') }}">
@endpush

@section('content')

<section class="services-hero">
    <div class="hero-overlay">
        <h1>Our Services</h1>
        <p>Expert guidance for your education and study-abroad journey</p>
    </div>
</section>

<section class="services-section">
    <div class="container">

        <h2>What We Offer</h2>

        <div class="services-grid">

            <div class="service-card">
                <i class="fas fa-graduation-cap icon blue"></i>
                <h3>Education Counseling</h3>
                <p>Personalized guidance to help you choose the right course and university for your future.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-university icon gold"></i>
                <h3 class="gold-text">University Admissions</h3>
                <p>End-to-end support for university applications, ensuring error-free and timely submissions.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-book-open icon blue"></i>
                <h3>Study Support</h3>
                <p>Comprehensive academic planning and resource support to help you excel in your studies.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-globe-asia icon gold"></i>
                <h3 class="gold-text">Career Guidance</h3>
                <p>Strategic career mapping to align your study path with your long-term professional goals.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-handshake icon blue"></i>
                <h3>Extended Support</h3>
                <p>We assist beyond visas with pre-departure briefings and smooth settlement guidance.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-pen-nib icon gold"></i>
                <h3 class="gold-text">Academic Guidance</h3>
                <p>Expert advice on course selection, scholarships, and academic requirements.</p>
            </div>

        </div>
    </div>
</section>

@endsection
