@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/ielts.css') }}">
@endpush

@section('content')

<section class="ielts-hero">
    <img src="{{asset('image/ielts.jpeg')}}" alt="IELTS Preparation">
    <div class="ielts-hero-overlay">
        <div class="ielts-hero-content">
            <h1>IELTS Band Scores</h1>
            <p>Your guide to understanding the 0-9 scoring system</p>
        </div>
    </div>
</section>

<section class="ielts-section">
    <div class="ielts-container">

        <h2>How Scoring Works</h2>
        <p class="intro">
            IELTS uses a 9-band scale to clearly identify levels of proficiency, from non-user (band score 1) to expert (band score 9).
        </p>

        <div class="ielts-grid">

            <div class="ielts-card">
                <h3>Overview</h3>
                <p>
                    IELTS scores are reported as band scores on a scale from 1 (the lowest) to 9 (the highest). You can receive whole (e.g., 6.0) or half band scores (e.g., 6.5).
                </p>
            </div>

            <div class="ielts-card">
                <h3>Listening Scores</h3>
                <p>
                    The Listening test consists of 40 questions. Each correct answer is worth one mark.
                </p>
                <table class="ielts-table">
                    <tr><th>Score / 40</th><th>Band</th></tr>
                    <tr><td>39–40</td><td>9.0</td></tr>
                    <tr><td>35–36</td><td>8.0</td></tr>
                    <tr><td>30–31</td><td>7.0</td></tr>
                    <tr><td>23–25</td><td>6.0</td></tr>
                </table>
            </div>

            <div class="ielts-card">
                <h3>Academic Reading</h3>
                <p>
                    For the Academic Reading test, texts are taken from books, journals, magazines, and newspapers.
                </p>
                <table class="ielts-table">
                    <tr><th>Score / 40</th><th>Band</th></tr>
                    <tr><td>39–40</td><td>9.0</td></tr>
                    <tr><td>35–36</td><td>8.0</td></tr>
                    <tr><td>30–32</td><td>7.0</td></tr>
                    <tr><td>23–26</td><td>6.0</td></tr>
                </table>
            </div>

            <div class="ielts-card">
                <h3>General Reading</h3>
                <p>
                    General Training Reading texts are from notices, advertisements, and company handbooks.
                </p>
                <table class="ielts-table">
                    <tr><th>Score / 40</th><th>Band</th></tr>
                    <tr><td>40</td><td>9.0</td></tr>
                    <tr><td>37–38</td><td>8.5</td></tr>
                    <tr><td>34–35</td><td>7.5</td></tr>
                    <tr><td>30–31</td><td>6.5</td></tr>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection
