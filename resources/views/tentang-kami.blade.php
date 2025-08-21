@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">
    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">
        <div class="container">
            <div data-aos="zoom-in" data-aos-once="false">
                <div class="mt-5 pt-lg-5">
                    <h1 class="my-text-heading heading-cursor">Tentang kami</h1>
                    <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                            Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Tentang
                        kami</h6>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="d-lg-flex flex-row-reverse">
                <div class="col-lg-6 text-center mb-5 d-flex align-items-center justify-content-center"
                    data-aos="fade-up" data-aos-once="false">
                    <div class="flex-1">
                        <div class="row mb-4 justify-content-center">
                            <div class="col-auto position-relative d-inline-block">
                                <img class="graphic-7" src="{{ asset('images/graphic/Asset 12.png') }}" alt="">
                                <!-- Gambar besar -->
                                <img src="{{ asset('storage/'. $fotoTentang[0]->foto ) }}" alt="Gambar Besar"
                                    class="circle-img shadow">

                                <!-- Gambar kecil 1 -->
                                <img src="{{ asset('storage/'. $fotoTentang[1]->foto ) }}" alt="Gambar Kecil 1"
                                    class="circle-img-small shadow small-img-1">

                                <!-- Gambar kecil 2 -->
                                <img src="{{ asset('storage/'. $fotoTentang[2]->foto ) }}" alt="Gambar Kecil 2"
                                    class="circle-img-small shadow small-img-2">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <h1>SD Ihsaniyah 1 Kota Tegal</h1>
                    <p class="my-3">{{ $deskripsi->deskripsi }}</p>
                    <h4>Visi :</h4>
                    <p class="my-3">{{ $visi->deskripsi }}</p>
                    <h4>Misi :</h4>
                    <ul>
                        @foreach ($misi as $misiItem)
                        <li>{{ $misiItem->judul }}</li>
                        @endforeach
                    </ul>
                    <h4>Tujuan Sekolah :</h4>
                    <ul>
                        @foreach ($tujuan as $tujuanItem)
                        <li>{{ $tujuanItem->judul }}</li>
                        @endforeach
                    </ul>


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