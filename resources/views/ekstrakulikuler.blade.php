@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">


    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

        <div class="container">
            <div data-aos="zoom-in" data-aos-once="false">
                <div class="mt-5 pt-lg-5">

                    <h1 class="my-text-heading heading-cursor">Ekstrakurikuler</h1>
                    <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                            Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Ekstrakurikuler</h6>
                </div>
            </div>
        </div>

    </section>
    <section class="py-4">
        <div class="container">
            <div class="fullwidth-photo-stack position-relative" data-aos="fade-up" data-aos-once="false">
                <img class="graphic-9" src="{{ asset('images/graphic/Asset 9.png') }}" alt="">
                <!-- Foto besar -->
                <div class="stack-photo big-stack" style="background-image: url('{{ asset('images/sampul4.jpg') }}');">
                </div>

                <!-- Foto kecil kiri -->
                <div class="stack-photo small-stack stack-left"
                    style="background-image: url('{{ asset('images/sampul5.jpg') }}');">
                </div>

                <!-- Foto kecil kanan -->
                <div class="stack-photo small-stack stack-right"
                    style="background-image: url('{{ asset('images/sampul5.jpg') }}');">
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container" data-aos="fade-up" data-aos-once="false">
            <div class="text-center">
                <h1 class="fs-1 text-dark my-4">Program Ekstrakurikuler
                    Seni & Akademik</h1>
                <div class="row">
                    <div class="col-6 col-lg-4 mb-3">Drum Band 1</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 2</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 3</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 4</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 5</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 6</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 7</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 8</div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="text-center">
                <h1 class="fs-1 text-dark my-4">Program Ekstrakurikuler
                    Olahraga & Kepemimpinan</h1>
                <div class="row">
                    <div class="col-6 col-lg-4 mb-3">Drum Band 1</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 2</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 3</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 4</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 5</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 6</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 7</div>
                    <div class="col-6 col-lg-4 mb-3">Drum Band 8</div>
                </div>

            </div>
        </div>
    </section>

</main>

@include('partials.footer')

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>
@endsection