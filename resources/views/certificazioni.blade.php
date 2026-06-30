@extends('layouts.app')

@section('content')
<div class="container py-5">
    {{-- Header con animazione --}}
    <div class="d-flex align-items-center gap-3 mb-5 reveal-bottom delay-1">
        <h2 class="section-title text-uppercase font-monospace m-0">{{ __('ui.cert_title') }}</h2>
        <div class="header-line flex-grow-1" style="height: 1px; background: var(--text-primary); opacity: 0.2;"></div>
    </div>

    <div class="row g-4">
        {{-- Card 1: Full Stack --}}
        <div class="col-md-6 reveal-bottom delay-2">
            <div class="card h-100 border-0 shadow-sm p-4" style="background-color: #f8f9fa;">
                <h5 class="fw-bold mb-2">Full Stack Web Developer</h5>
                <p class="text-muted small mb-3">{{ __('ui.cert_released_by') }} Aulab | 13 {{ __('ui.cert_date_april') }} 2026</p>
                <p class="small text-dark mb-4">{{ __('ui.cert_skills_1') }}</p>
                <div class="mt-auto">
                    <a href="{{ asset('img/Xhoni-Lickollari-(Web-Developer).png') }}" target="_blank" 
                       class="interactive-link d-inline-flex align-items-center gap-2 text-decoration-none" style="color: var(--text-primary);">
                        <span class="arrow">&rarr;</span> {{ __('ui.cert_view') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 2: Java/Spring --}}
        <div class="col-md-6 reveal-bottom delay-3">
            <div class="card h-100 border-0 shadow-sm p-4" style="background-color: #f8f9fa;">
                <h5 class="fw-bold mb-2">{{ __('ui.cert_title_2') }}</h5>
                <p class="text-muted small mb-3">{{ __('ui.cert_released_by') }} Aulab | 18 {{ __('ui.cert_date_june') }} 2026</p>
                <p class="small text-dark mb-4">{{ __('ui.cert_skills_2') }}</p>
                <div class="mt-auto">
                    <a href="{{ asset('img/Xhoni-Lickollari-JAVA(specializazzione).png') }}" target="_blank" 
                       class="interactive-link d-inline-flex align-items-center gap-2 text-decoration-none" style="color: var(--text-primary);">
                        <span class="arrow">&rarr;</span> {{ __('ui.cert_view') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottone di ritorno --}}
    <div class="mt-5 text-center reveal-bottom delay-4">
        <a href="{{ route('about') }}" class="interactive-link d-inline-flex align-items-center gap-2 text-decoration-none">
            <span class="arrow">&larr;</span> {{ __('ui.cert_back') }}
        </a>
    </div>
</div>
@endsection