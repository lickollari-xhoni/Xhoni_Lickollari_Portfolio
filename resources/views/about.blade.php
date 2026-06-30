@extends('layouts.app')

@section('content')
    <div class="row about-section align-items-center position-relative z-1 py-4 py-lg-5 w-100 g-4 about-section-custom">

        <div class="col-lg-5 text-center order-1 order-lg-2 reveal-bottom delay-2">
            <div class="position-relative overflow-hidden about-profile-container">
                <img src="{{ asset('img/foto-profilo.JPG') }}" alt="Xhoni Lickollari"
                    class="img-fluid object-fit-cover position-relative about-profile-img">
                <div class="position-absolute top-0 start-0 w-100 h-100 about-photo-vintage-overlay"></div>
            </div>
        </div>

        <div class="col-lg-7 d-flex flex-column gap-4 text-start pe-lg-5 order-2 order-lg-1 mt-4 mt-lg-0">

            <div class="d-flex align-items-center gap-3 reveal-bottom delay-1">
                <h2 class="section-title text-filled text-uppercase font-monospace m-0 about-title-text">
                    {{ __('ui.about_title') }}
                </h2>
                <div class="header-line flex-grow-1 about-header-line"></div>
            </div>

            <p class="about-description text-muted m-0 about-bio-p reveal-bottom delay-2">
                {!! __('ui.about_bio') !!}
            </p>

            <div class="skills-block">
                <div class="d-flex flex-wrap gap-2">
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">PHP</span>
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">Laravel</span>
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">Java</span>
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">Spring Boot</span>
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">MySQL</span>
                    <span class="skill-tag border border-secondary border-opacity-25 rounded-pill text-muted px-3 py-1.5 about-skill-pill">REST API</span>
                </div>
            </div>

            <div class="mt-4 d-flex flex-wrap justify-content-center align-items-center gap-3 gap-sm-4">
                <a href="{{ asset('cv.pdf') }}" target="_blank" rel="noopener noreferrer"
                    class="interactive-link d-inline-flex align-items-center gap-2 cv-link text-nowrap">
                    <span class="arrow">&darr;</span> {{ __('ui.about_cv') }}
                    <div class="hover-circle"></div>
                </a>

                <a href="{{ route('certificazioni') }}"
                    class="interactive-link d-inline-flex align-items-center gap-2 cv-link text-nowrap">
                    <span class="arrow">&darr;</span> {{ __('ui.about_certifications') }}
                    <div class="hover-circle"></div>
                </a>
            </div>

        </div>
    </div>
@endsection