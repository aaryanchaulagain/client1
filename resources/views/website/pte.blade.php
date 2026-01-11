@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pte.css') }}">
@endpush

@section('content')

<section class="pte-hero">
    <img src="{{asset('image/pte.jpeg')}}" alt="PTE Academic Scores">
    <div class="pte-hero-overlay">
        <div class="pte-hero-content">
            <h1>PTE Academic Scores</h1>
            <p>Your comprehensive guide to PTE scoring and IELTS comparison</p>
        </div>
    </div>
</section>

<section class="pte-section">
    <div class="pte-container">

        <h2>PTE Score System</h2>
        <p class="pte-intro">
            PTE Academic is scored on a scale from 10 to 90. This holistic score reflects your overall English language ability across Listening, Reading, Speaking, and Writing.
        </p>

        <div class="pte-grid">

            <div class="pte-card">
                <h3>What is PTE Academic?</h3>
                <p>
                    PTE Academic is a computer-based English test accepted by thousands of institutions worldwide. It assesses your real-life English skills using AI technology.
                </p>
            </div>

            <div class="pte-card">
                <h3>How PTE is Scored</h3>
                <p>
                    Your responses are scored by an automated system. Scores are based on correctness, oral fluency, pronunciation, and the quality of your written response.
                </p>
            </div>
        </div>

        <div class="pte-grid">

            <div class="pte-card">
                <h3>PTE Score Guide</h3>
                <p>
                    A quick reference to understand what your score means in terms of proficiency.
                </p>

                <div class="table-wrapper">
                    <table class="pte-table">
                        <tr><th>Score Range</th><th>Proficiency Level</th></tr>
                        <tr><td>85 - 90</td><td>Expert</td></tr>
                        <tr><td>76 - 84</td><td>Very Good</td></tr>
                        <tr><td>59 - 75</td><td>Good / Competent</td></tr>
                        <tr><td>43 - 58</td><td>Modest</td></tr>
                        <tr><td>30 - 42</td><td>Limited</td></tr>
                    </table>
                </div>
            </div>

            <div class="pte-card">
                <h3>PTE vs IELTS Comparison</h3>
                <p>
                    Use this table to see how your PTE score compares to the IELTS Band system.
                </p>

                <div class="table-wrapper">
                    <table class="pte-table">
                        <tr>
                            <th>IELTS</th>
                            <th>PTE Overall</th>
                            <th>Writing</th>
                        </tr>
                        <tr><td>4.5</td><td>30</td><td>-</td></tr>
                        <tr><td>5.0</td><td>36</td><td>36</td></tr>
                        <tr><td>5.5</td><td>42</td><td>42</td></tr>
                        <tr><td>6.0</td><td>50</td><td>50</td></tr>
                        <tr><td>6.5</td><td>58</td><td>58</td></tr>
                        <tr><td>7.0</td><td>65</td><td>65</td></tr>
                        <tr><td>7.5</td><td>73</td><td>73</td></tr>
                        <tr><td>8.0</td><td>79</td><td>79</td></tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
