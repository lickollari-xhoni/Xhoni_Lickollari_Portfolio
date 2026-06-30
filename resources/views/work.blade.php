@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="text-center mb-5 reveal-bottom delay-1">
            <h2 class="text-uppercase small fw-bold tracking-widest text-muted">{{ __('ui.work_title') }}_</h2>
        </div>

        {{-- PROGETTO 1: Komerz --}}
        <div class="row align-items-center mb-5 pb-5 border-bottom reveal-bottom delay-2">
            <div class="col-lg-4 offset-lg-1 mt-4 mt-lg-0 order-1 order-lg-1">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase small fw-bold text-primary">E-Commerce</span>
                    <a href="https://github.com/lickollari-xhoni/Final_Project_Xhoni_Lickollari" target="_blank"
                        class="menu-social-link interactive-link d-flex align-items-center gap-2 text-decoration-none">
                        <span class="arrow">&nearr;</span> GitHub
                    </a>
                </div>
                <h3 class="display-6 fw-bold mt-2">Komerz</h3>
                <p class="lead text-muted">{{ __('ui.work_komerz_desc') }}</p>
            </div>
            <div class="col-lg-7 order-2 order-lg-2">
                <div id="carouselKomerz" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="{{ asset('img/komerz-1.PNG') }}" class="d-block w-100" alt="Komerz 1"></div>
                        <div class="carousel-item"><img src="{{ asset('img/komerz-2.PNG') }}" class="d-block w-100" alt="Komerz 2"></div>
                        <div class="carousel-item"><img src="{{ asset('img/komerz-3.PNG') }}" class="d-block w-100" alt="Komerz 3"></div>
                        <div class="carousel-item"><img src="{{ asset('img/komerz-4.PNG') }}" class="d-block w-100" alt="Komerz 4"></div>
                        <div class="carousel-item"><img src="{{ asset('img/komerz-5.PNG') }}" class="d-block w-100" alt="Komerz 5"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKomerz" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKomerz" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                </div>
            </div>
        </div>

        {{-- PROGETTO 2: Aulab Chronicle --}}
        <div class="row align-items-center mb-5 pb-5 border-bottom reveal-bottom delay-2">
            <div class="col-lg-4 offset-lg-1 mt-4 mt-lg-0 order-1 order-lg-1">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase small fw-bold text-primary">NEWS PLATFORM</span>
                    <a href="https://github.com/lickollari-xhoni/Final_Project_Xhoni_Lickollari" target="_blank"
                        class="menu-social-link interactive-link d-flex align-items-center gap-2 text-decoration-none">
                        <span class="arrow">&nearr;</span> GitHub
                    </a>
                </div>
                <h3 class="display-6 fw-bold mt-2">Aulab Chronicle</h3>
                <p class="lead text-muted">{{ __('ui.work_chronicle_desc') }}</p>
            </div>
            <div class="col-lg-7 order-2 order-lg-2">
                <div id="carouselChronicle" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="{{ asset('img/aulab-chronicle-1.PNG') }}" class="d-block w-100" alt="Chronicle 1"></div>
                        <div class="carousel-item"><img src="{{ asset('img/aulab-chronicle-2.PNG') }}" class="d-block w-100" alt="Chronicle 2"></div>
                        <div class="carousel-item"><img src="{{ asset('img/aulab-chronicle-3.PNG') }}" class="d-block w-100" alt="Chronicle 3"></div>
                        <div class="carousel-item"><img src="{{ asset('img/aulab-chronicle-4.PNG') }}" class="d-block w-100" alt="Chronicle 4"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselChronicle" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselChronicle" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                </div>
            </div>
        </div>

        {{-- PROGETTO 3: EdilPro --}}
        <div class="row align-items-center mb-5 pb-5 border-bottom reveal-bottom delay-2">
            <div class="col-lg-4 offset-lg-1 mt-4 mt-lg-0 order-1 order-lg-1">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase small fw-bold text-primary">CORPORATE</span>
                    <a href="https://github.com/lickollari-xhoni/Edil_Pro" target="_blank"
                        class="menu-social-link interactive-link d-flex align-items-center gap-2 text-decoration-none">
                        <span class="arrow">&nearr;</span> GitHub
                    </a>
                </div>
                <h3 class="display-6 fw-bold mt-2">EdilPro</h3>
                <p class="lead text-muted">{{ __('ui.work_edilpro_desc') }}</p>
            </div>
            <div class="col-lg-7 order-2 order-lg-2">
                <div id="carouselEdilPro" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="{{ asset('img/edilpro-1.PNG') }}" class="d-block w-100" alt="EdilPro 1"></div>
                        <div class="carousel-item"><img src="{{ asset('img/edilpro-2.PNG') }}" class="d-block w-100" alt="EdilPro 2"></div>
                        <div class="carousel-item"><img src="{{ asset('img/edilpro-3.PNG') }}" class="d-block w-100" alt="EdilPro 3"></div>
                        <div class="carousel-item"><img src="{{ asset('img/edilpro-4.PNG') }}" class="d-block w-100" alt="EdilPro 4"></div>
                        <div class="carousel-item"><img src="{{ asset('img/edilpro-5.PNG') }}" class="d-block w-100" alt="EdilPro 5"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEdilPro" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEdilPro" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                </div>
            </div>
        </div>
    </div>

@endsection