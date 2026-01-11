@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section class="ceo-section">
    <div class="ceo-container">

        <div class="ceo-content">
            <h2>Message from CEO & Founder</h2>
            <span class="dear-students">Dear Students,</span>

            <p>
                Welcome to Oz Connect, where we open doors to international education and help students achieve
                their dreams. As the CEO and Founder, I'm proud of our success in guiding thousands of
                students towards their educational goals in countries like the UK, Australia, Canada,
                Denmark, Japan, USA and more.
            </p>

            <p>
                We provide top-notch guidance and support for higher education and career development in
                international academic horizons. Our dedicated team of experts offers updated advice and
                test preparation for exams like IELTS, PTE, GMAT, and more.
            </p>

            <a href="#" class="read-more-btn">Read More</a>
        </div>

        <div class="ceo-image-wrapper">
            <div class="image-placeholder">
                <img src="{{asset('image/bullet.png')}}" alt="CEO Image">
            </div>
            <p class="ceo-name-label">Mr. Name Surname / CEO & Founder</p>
        </div>

    </div>
</section>

<section class="contact-cta">
    <div class="contact-cta-content">
        <h2>Got any queries? Contact Us.</h2>
        <p>
            Feel free to book an appointment by filling up the popup form.
            Our team will reach out to you as soon as possible.
        </p>
        <a href="/contactus" class="cta-btn">Book An Appointment</a>
    </div>
</section>

@endsection
