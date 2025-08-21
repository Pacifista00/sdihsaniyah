@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">


    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

        <div class="container">
            <div data-aos="zoom-in" data-aos-once="false">
                <div class="mt-5 pt-lg-5">

                    <h1 class="my-text-heading heading-cursor">Prestasi Siswa</h1>
                    <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                            Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Prestasi Siswa</h6>
                </div>
            </div>
        </div>

    </section>
    <section class="py-4">
        <div class="container" data-aos="fade-up" data-aos-once="false">
            <div class="fullwidth-photo-stack position-relative">
                <img class="graphic-9" src="{{ asset('images/graphic/Asset 9.png') }}" alt="">
                <!-- Foto besar -->
                <div class="stack-photo big-stack"
                    style="background-image: url('{{ asset('storage/' . $fotoPrestasi[0]->foto ) }}');">
                </div>

                <!-- Foto kecil kiri -->
                <div class="stack-photo small-stack stack-left"
                    style="background-image: url('{{ asset('storage/' . $fotoPrestasi[1]->foto) }}');">
                </div>

                <!-- Foto kecil kanan -->
                <div class="stack-photo small-stack stack-right"
                    style="background-image: url('{{ asset('storage/' . $fotoPrestasi[2]->foto) }}');">
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center text-lg-start">
                        <h1 class="fs-1 my-4">Internasional</h1>
                        <div class="row">
                            @foreach ($prestasiInternasional as $prestasiInternasionalItem)
                            <div class="">{{ $prestasiInternasionalItem->judul }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center text-lg-start">
                        <h1 class="fs-1 my-4">Nasional</h1>
                        <div class="row">
                            @foreach ($prestasiNasional as $prestasiNasionalItem)
                            <div class="">{{ $prestasiNasionalItem->judul }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center text-lg-start">
                        <h1 class="fs-1 my-4">Provinsi</h1>
                        <div class="row">
                            @foreach ($prestasiProvinsi as $prestasiProvinsiItem)
                            <div class="">{{ $prestasiProvinsiItem->judul }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <div class="text-center text-lg-start">
                        <h1 class="fs-1 my-4">Kota</h1>
                        <div class="row">
                            @foreach ($prestasiKota as $prestasiKotaItem)
                            <div class="">{{ $prestasiKotaItem->judul }}</div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    @foreach ($prestasi as $prestasiItem)
                    <div class="col-12 col-md-6 mb-2 d-flex align-items-center">
                        <i class="bi bi-trophy me-2 my-text-primary"></i>
                        <h6 class="mb-0 fw-medium">{{ $prestasiItem->judul }}</h6>
                    </div>
                    @endforeach
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