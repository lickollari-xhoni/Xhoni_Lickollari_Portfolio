@extends('layouts.app')

@section('content')
    <div class="w-100 text-center px-3 hero-content">
        {{-- Titolo --}}
        <h1 class="fw-bold mb-4 text-uppercase"
            style="font-size: calc(1.5rem + 1.5vw); line-height: 1.2; letter-spacing: -0.5px;">
            <span style="color: #e2e1e6; -webkit-text-stroke: 2px #050506; paint-order: stroke fill; opacity: 0.9;">
                {{ __('ui.hero_title_intro') }}<span class="break-mobile"></span>
            </span>
            <span style="color: #3c3b4e;">XHONI LICKOLLARI</span>
        </h1>

        {{-- Descrizione --}}
        <p class="text-muted mx-auto mb-0" style="max-width: 600px; line-height: 1.6; font-size: 1.2rem;">
            {{ __('ui.hero_desc_1') }}
            <span class="break-mobile"></span>
            <strong class="text-dark">PHP & Laravel</strong>.<br>

            {{ __('ui.hero_desc_2') }}
            <span class="break-mobile"></span>
            <strong class="text-dark">Java / Spring Boot</strong>.
        </p>

        <div class="hero-actions d-flex justify-content-center gap-5 mt-5">
            <a href="{{ route('about') }}" class="interactive-link d-flex align-items-center gap-2 text-decoration-none">
                <span class="arrow">&rarr;</span> {{ __('ui.hero_button') }}
                <div class="hover-circle"></div>
            </a>
        </div>
    </div>
@endsection
