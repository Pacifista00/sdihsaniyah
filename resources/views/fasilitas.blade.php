@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="mt-5 pt-lg-5">

                        <h1 class="my-text-heading heading-cursor">Fasilitas Sekolah</h1>
                        <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                                Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Fasilitas Sekolah</h6>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="my-5 text-center">
                    <h1 class="fs-1 mb-3">FASILITAS SEKOLAH</h1>
                    <p class="fs-6">Untuk menunjang segala proses belajar mengajar, kami memiliki fasilitas yang
                        sangat lengkap diantaranya.</p>
                </div>
                <div class="row">
                    <div class="col-6 col-lg-4 text-center mb-3">
                        <div class="text-center my-4">
                            <div class="profile-wrapper position-relative d-inline-block">
                            <!-- Foto bulat -->
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Foto Profil" 
                                class="profile-img rounded-circle border border-3 border-light">

                            <!-- Ikon PNG di pojok kanan bawah -->
                            <img src="{{ asset('images/shape.png') }}" alt="Ikon" 
                                class="corner-icon position-absolute">
                            </div>

                            <!-- Judul -->
                            <h5 class="mt-3 fw-bold">Judul di Sini</h5>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 text-center mb-3">
                        <div class="text-center my-4">
                            <div class="profile-wrapper position-relative d-inline-block">
                            <!-- Foto bulat -->
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Foto Profil" 
                                class="profile-img rounded-circle border border-3 border-light">

                            <!-- Ikon PNG di pojok kanan bawah -->
                            <img src="{{ asset('images/shape.png') }}" alt="Ikon" 
                                class="corner-icon position-absolute">
                            </div>

                            <!-- Judul -->
                            <h5 class="mt-3 fw-bold">Judul di Sini</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                            <div class="text-center">
                                <img src="{{ asset('images/kids.png') }}" alt="" class="w-75">
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-6">
                        <div class="container mb-5">
                            <h1 class="fs-1 text-dark">Kami ingin mendengar sesuatu darimu</h1>
                        </div>
                        <ul>
                            <li class="mb-3">Media pembelajaran yang lengkap</li>
                            <li class="mb-3">Media pembelajaran yang lengkap</li>
                            <li class="mb-3">Media pembelajaran yang lengkap</li>
                            <li class="mb-3">Media pembelajaran yang lengkap</li>
                        </ul>
                    </div><!-- End Contact Form -->

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
