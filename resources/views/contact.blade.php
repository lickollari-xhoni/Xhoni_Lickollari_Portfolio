@extends('layouts.app')

@section('content')
    <div class="w-100 text-center">
        <div class="mb-5">
            <h2 class="text-uppercase small fw-bold tracking-widest text-muted">
                {{ __('ui.contact_title') }}_
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="d-flex flex-column gap-3">
                    <div class="p-4 bg-portfolio-card d-flex justify-content-between align-items-center contact-item">
                        <span class="text-uppercase font-monospace text-muted small">Email</span>
                        <a href="mailto:xhoni.lickollari@email.com"
                            class="fw-bold text-decoration-none text-dark">lickollarixhoni@yahoo.it</a>
                    </div>
                    <div class="p-4 bg-portfolio-card d-flex justify-content-between align-items-center contact-item">
                        <span class="text-uppercase font-monospace text-muted small">LinkedIn</span>
                        <a href="https://www.linkedin.com/in/xhoni-lickollari-677936236/" target="_blank"
                            class="fw-bold text-decoration-none text-dark">Xhoni Lickollari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
