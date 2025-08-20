@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">


    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

        <div class="container">
            <div data-aos="zoom-in" data-aos-once="false">
                <div class="mt-5 pt-lg-5">

                    <h1 class="my-text-heading heading-cursor">Program Sekolah</h1>
                    <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                            Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Program Sekolah</h6>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="my-5 text-center" data-aos="fade-up" data-aos-once="false">
                <h1 class="fs-1  mb-3">PROGRAM SEKOLAH</h1>
                <p class=" fs-6">Berikut adalah Program Ungulan Sekolah SD Ihsaniyah 1 Kota Tegal</p>
            </div>
            <div class="row">
                <div class="col-6 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center my-4">
                        <div class="profile-wrapper position-relative d-inline-block">
                            <!-- Foto bulat -->
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Foto Profil"
                                class="profile-img rounded-circle border border-3 border-light">

                            <!-- Ikon PNG di pojok kanan bawah -->
                            <img class="graphic-8" src="{{ asset('images/graphic/Asset 8.png') }}" alt="">
                        </div>

                        <!-- Judul -->
                        <h5 class="mt-3 fw-bold">Judul di Sini</h5>
                    </div>
                </div>
                <div class="col-6 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center my-4">
                        <div class="profile-wrapper position-relative d-inline-block">
                            <!-- Foto bulat -->
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Foto Profil"
                                class="profile-img rounded-circle border border-3 border-light">

                            <!-- Ikon PNG di pojok kanan bawah -->
                            <img class="graphic-8" src="{{ asset('images/graphic/Asset 8.png') }}" alt="">
                        </div>

                        <!-- Judul -->
                        <h5 class="mt-3 fw-bold">Judul di Sini</h5>
                    </div>
                </div>
                <div class="col-6 col-lg-4 text-center mb-3" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center my-4">
                        <div class="profile-wrapper position-relative d-inline-block">
                            <!-- Foto bulat -->
                            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Foto Profil"
                                class="profile-img rounded-circle border border-3 border-light">

                            <!-- Ikon PNG di pojok kanan bawah -->
                            <img class="graphic-8" src="{{ asset('images/graphic/Asset 8.png') }}" alt="">
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
                            <img class="graphic-8" src="{{ asset('images/graphic/Asset 8.png') }}" alt="">
                        </div>

                        <!-- Judul -->
                        <h5 class="mt-3 fw-bold">Judul di Sini</h5>
                    </div>
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