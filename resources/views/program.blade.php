@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="mt-5 pt-lg-5">

                        <h1 class="my-text-heading">Program Sekolah</h1>
                        <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                                Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Program Sekolah</h6>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="my-5 text-center">
                    <h1 class="fs-1 text-dark mb-3">PROGRAM SEKOLAH</h1>
                    <p class="text-dark fs-6">Berikut adalah Program Ungulan Sekolah SD Ihsaniyah 1 Kota Tegal</p>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset(path: 'images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
                    </div>
                    <div class="col-6 col-lg-4 text-center">
                        <figure class="square-img mb-5 rounded-5 mx-auto">
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Mountains">
                            <figcaption>The Day</figcaption>
                        </figure>
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
