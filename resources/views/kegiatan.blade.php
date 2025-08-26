@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">


    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

        <div class="container">
            <div data-aos="zoom-in" data-aos-once="false">
                <div class="mt-5 pt-lg-5">

                    <h1 class="my-text-heading heading-cursor">Kegiatan Kami</h1>
                    <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                            Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Kegiatan</h6>
                </div>
            </div>
        </div>

    </section>
    <section class="py-4">
        <div class="container">
            <div class="row mx-0">
                <!-- Berita 1 -->
                <div class="col-lg-8 row pe-0">
                    @foreach ($kegiatan as $kegiatanItem)
                    <div class="col-md-6" data-aos="fade-up" data-aos-once="false">
                        <div class="card shadow outline-0 rounded-4 position-relative mb-4">
                            <!-- Tanggal di kiri bawah -->
                            <div class="position-relative">
                                <span class="badge-tanggal position-absolute rounded-pill">
                                    {{ \Carbon\Carbon::parse($kegiatanItem->tanggal)->locale('id')->translatedFormat('d
                                    F Y') }}
                                </span>

                                <img src="{{ asset('storage/' . $kegiatanItem->foto) }}"
                                    class="card-img-top img-list-berita rounded-4" alt="Berita 1">
                            </div>

                            <div class="card-body text-start">
                                <h4 class="card-title my-text-dark crop-text-kegiatan-title">{{ $kegiatanItem->judul }}
                                </h4>
                                <p class="my-text-dark crop-text-kegiatan-main">{{ $kegiatanItem->deskripsi }}</p>
                                <a href="{{ url('/kegiatan/' . $kegiatanItem->id) }}"
                                    class="btn btn-green animate__animated animate__fadeInUp scrollto rounded-pill btn-anim mt-2">
                                    <span>Selengkapnya</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4 ms-md-4 mt-0">
                    <div class="berita-terkini container" data-aos="fade-up" data-aos-once="false">
                        <h2>Berita Unggulan</h2>
                        <ul class="list-unstyled">
                            @foreach ($topKegiatan as $topItem)
                            <li class="d-flex align-items-start mb-3">
                                <!-- Thumbnail -->
                                <div class="me-3 rounded-4 overflow-hidden" style="width:120px; height:80px;">
                                    <img src="{{ asset('storage/' . $topItem->foto) }}" alt="Berita" class="w-100 h-100"
                                        style="object-fit: cover;">
                                </div>
                                <!-- Judul -->
                                <a href="/kegiatan/{{ $topItem->id }}"
                                    class="mb-0 crop-text-kegiatan-title fs-6 my-text-dark text-decoration-underline">
                                    {{ $topItem->judul }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="berita-pilihan container" data-aos="fade-up" data-aos-once="false">
                        <h2>Berita Pilihan</h2>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-3">
                                <!-- Thumbnail -->
                                <img src="{{ asset('images/sampul5.jpg') }}" alt="Berita" class="me-3 rounded-4"
                                    style="width: 120px; height: 80px; object-fit: cover;">

                                <!-- Judul -->
                                <p class="mb-0">
                                    Siswa SD Muhammadiyah Sapen Harumkan Indonesia di Panggung Internasional Korea
                                    Selatan
                                </p>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <!-- Thumbnail -->
                                <img src="{{ asset('images/sampul5.jpg') }}" alt="Berita" class="me-3 rounded-4"
                                    style="width: 120px; height: 80px; object-fit: cover;">

                                <!-- Judul -->
                                <p class="mb-0">
                                    Siswa SD Muhammadiyah Sapen Harumkan Indonesia di Panggung Internasional Korea
                                    Selatan
                                </p>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <!-- Thumbnail -->
                                <img src="{{ asset('images/sampul5.jpg') }}" alt="Berita" class="me-3 rounded-4"
                                    style="width: 120px; height: 80px; object-fit: cover;">

                                <!-- Judul -->
                                <p class="mb-0">
                                    Siswa SD Muhammadiyah Sapen Harumkan Indonesia di Panggung Internasional Korea
                                    Selatan
                                </p>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <!-- Thumbnail -->
                                <img src="{{ asset('images/sampul5.jpg') }}" alt="Berita" class="me-3 rounded-4"
                                    style="width: 120px; height: 80px; object-fit: cover;">

                                <!-- Judul -->
                                <p class="mb-0">
                                    Siswa SD Muhammadiyah Sapen Harumkan Indonesia di Panggung Internasional Korea
                                    Selatan
                                </p>
                            </li>
                        </ul>
                    </div> --}}
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