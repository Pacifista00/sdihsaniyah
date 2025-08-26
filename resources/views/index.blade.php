@extends('layouts.main')
@section('content')
@include('partials.navbar')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade"
            data-bs-ride="carousel">

            @foreach ($jumbotron as $jumbotronItem)
            <div class="carousel-item {{ $jumbotronItem->id == 1 ? 'active' : '' }}" style="min-height: 600px">
                <div class="carousel-container my-auto" data-aos="fade-up" data-aos-once="false">
                    <h1 class=" fs-1 jumbotron-head heading-cursor">
                        {{ $jumbotronItem->judul }}</h1>
                    <p class="animate__animated animate__fadeInUp">{{ $jumbotronItem->deskripsi }}</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center gap-3 scrollto ">
                        <a href="https://wa.me/{{ $kontak->whatsapp }}">
                            <button
                                class="btn-green btn-jumbotron rounded-pill d-flex justify-content-center align-items-center">
                                Konsultasi Whatsapp
                                <i class="bi bi-whatsapp fs-4 ms-1"></i>
                            </button>
                        </a>
                        <a href="/daftar-spmb">
                            <button
                                class="btn-white-transparent btn-jumbotron rounded-pill d-flex justify-content-center align-items-center">
                                Daftar Sekarang
                                <i class="bi bi-arrow-up-right-circle fs-4 ms-1"></i>
                            </button>
                        </a>

                        <style>
                            @media (max-width: 991.98px) {
                                .btn-jumbotron {
                                    width: 100%;
                                }
                            }
                        </style>
                    </div>


                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <div class="wave-container">
            <svg class="wave wave1" viewBox="0 0 2400 200" preserveAspectRatio="none">
                <path d="M0,100 C300,200 900,0 1200,100 C1500,200 2100,0 2400,100 L2400,200 L0,200 Z" />
            </svg>
            <svg class="wave wave2" viewBox="0 0 2400 200" preserveAspectRatio="none">
                <path d="M0,100 C300,200 900,0 1200,100 C1500,200 2100,0 2400,100 L2400,200 L0,200 Z" />
            </svg>
        </div>

    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container section-title my-5" data-aos="fade-up" data-aos-once="false">
            <!-- <h2>About</h2> -->
            <div class="row">
                <div class="col-md-6" data-aos="zoom-out-up">
                    <small class="fs-6 text-label position-relative">
                        <img class="graphic-1" src="{{ asset('images/graphic/Asset 1.png') }}" alt="">
                        PROFIL KAMI
                    </small>
                    <h1 class="head-about p-0 m-0 fs-1 heading-line">{{ $profil->judul }}</h1>
                    <div class="d-flex gap-3 mt-3 mt-lg-4 mb-3 mb-lg-0">
                        <a href="/tentang-kami" class="btn btn-green scrollto rounded-pill btn-anim">
                            <span>Tentang Kami</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="/fasilitas" class="btn btn-orange scrollto rounded-pill btn-anim">
                            <span>Fasilitas</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-once="false">
                    <small class="fs-6 text-base m-0 text-lg-end">
                        {{ $profil->deskripsi }}
                    </small>
                </div>

            </div>

        </div>
        <div class="container">
            <div class="video-wrapper" data-aos="fade-up" data-aos-once="false" style="z-index: 999999 !important;">
                <iframe src="https://www.youtube.com/embed/qDaaq-9Rypc?si=ibviU1YAGMyKTnxA"
                    class=" position-absolute z-3" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>

        </div>

    </section><!-- /About Section -->

    <section class="my-bg-primary ppdb-section section-wave">
        <div class="container text-center">
            <div class="mb-5" data-aos="fade-up" data-aos-once="false">
                <h1 class="fs-1 text-white position-relative">
                    <img class="graphic-2" src="{{ asset('images/graphic/Asset 2.png') }}" alt="">
                    Informasi PPDB
                </h1>
                <p class="text-white fs-6 position-relative">Penerimaan Peserta Didik Baru Tahun Ajaran Mendatang
                    <img class="graphic-3" src="{{ asset('images/graphic/Asset 3.png') }}" alt="">
                </p>
            </div>
            <div class="row pb-lg-5 mb-lg-5" data-aos="fade-up" data-aos-once="false">
                <div class="col-lg-4">
                    <div class="card rounded-5 card-ppdb position-relative my-text-dark">
                        <!-- Gambar melayang -->
                        <div class="position-absolute" style="top:-25px; right:-10px; width:85px; height:85px;">
                            <!-- Background Shape -->
                            <img src="{{ asset('images/shape.png') }}" alt="icon" class="rotating"
                                style="width:100%; height:100%; object-fit:contain; position:absolute; top:0; left:0; z-index:0;">

                            <!-- Teks di tengah -->
                            <span class="my-text-dark fw-bold text-white"
                                style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center; font-size:12px; line-height:1.2; z-index:1;">
                                Sisa <br>
                                <span class="fs-3 m-0 p-0">{{ $ppdb[2]->kuota_tersisa }}</span>
                            </span>
                        </div>




                        <div class="card-body p-4 mt-2 text-center">
                            <h2 class="card-title w-75 mx-auto">{{ $ppdb[2]->angkatan }}</h2>
                            <p class="card-text my-4">{{ $ppdb[2]->deskripsi }}</p>
                            <a href="/daftar-spmb" class="btn w-100 rounded-pill btn-orange">Daftar</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card rounded-5 card-ppdb">
                        <div class="card-body p-4 mt-2 my-text-dark">
                            <h2 class="card-title w-75 mx-auto">{{ $ppdb[1]->angkatan }}</h2>
                            <p class="card-text my-4">{{ $ppdb[1]->deskripsi }}</p>
                            <a href="/daftar-spmb" class="btn w-100 rounded-pill btn-orange">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded-5 card-ppdb my-text-dark">
                        <div class="card-body p-4 mt-2">
                            <h2 class="card-title w-75 mx-auto">{{ $ppdb[0]->angkatan }}</h2>
                            <p class="card-text my-4">{{ $ppdb[0]->deskripsi }}</p>
                            <a href="/daftar-spmb" class="btn w-100 rounded-pill btn-orange">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" style="transform: scaleX(-1);">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,80C120,100,300,120,480,110C660,100,840,60,1020,70C1200,80,1320,120,1440,100L1440,150L0,150Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="pt-4">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" data-aos-once="false">
            <!-- <h2>About</h2> -->
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <!-- <small class="fs-6 text-label">PROFIL KAMI</small> -->
                    <h1 class="head-about p-0 m-0 fs-1">Kurikulum dan Program Unggulan SD Ihsaniyah 1 Kota Tegal
                    </h1>
                    <div>
                        <div class="kurikulum fw-medium">
                            <p class="mt-4 mb-3 text-base fs-5">Kurikulum :</p>
                            <ul class="row list-unstyled text-start ">
                                @foreach ($kurikulum as $kurikulumItem)
                                <li class="col-md-4 mb-3"><i class="bi bi-check-circle my-text-primary me-1"></i>{{
                                    $kurikulumItem->judul }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="program-unggulan fw-medium">
                            <p class="my-3 text-base fs-5">Program Unggulan :</p>
                            <ul class="row list-unstyled text-start fw-medium">
                                @foreach ($program as $programItem)
                                <li class="col-md-4 mb-3"><i class="bi bi-check-circle my-text-primary me-1"></i>{{
                                    $programItem->judul }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- <p>Who we are</p> -->
                </div>

                <div class="col-lg-6 d-flex align-items-center justify-content-center mt-lg-0" data-aos="fade-up"
                    data-aos-once="false">
                    <div class="photo-stack position-relative">
                        <!-- Foto besar di tengah -->
                        <img class="graphic-4" src="{{ asset('images/graphic/Asset 4.png') }}" alt="">

                        <!-- Foto kecil di atas kanan -->
                        <div class="taped-photo small-photo small-1"
                            style="background-image: url('{{ asset('storage/' . $fotoKurikulum[0]->foto) }}');">
                        </div>

                        <div class="taped-photo small-photo small-2"
                            style="background-image: url('{{ asset('storage/' . $fotoKurikulum[1]->foto) }}');">
                        </div>

                        <div class="taped-photo big-photo"
                            style="background-image: url('{{ asset('storage/' . $fotoKurikulum[2]->foto) }}');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg-section">

        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-once="false">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3 class="text-white fs-1">{{ $prestasi->judul }}</h3>
                    <p class="text-white">
                        {{ $prestasi->deskripsi }}
                    </p>


                </div>

                <div class="col-xl-3 cta-btn-container text-center d-flex align-items-center justify-content-center">
                    <a href="/prestasi" class="btn btn-green scrollto rounded-pill btn-anim">
                        <span>Prestasi</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section pb-0">

        <div class="container text-center" data-aos="fade-up" data-aos-once="false">
            <h1 class="fs-1 my-text-dark">Testimoni</h1>
            {{-- <p class="my-text-dark fs-6">Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>

        <div class="container" data-aos="fade-up" data-aos-once="false">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 10
                }
              }
            }
                </script>
                <div class="swiper-wrapper">
                    @foreach ($testimoni as $testimoniItem)
                    <div class="swiper-slide">
                        <div class="testimonial-item m-0 bg-transparent">
                            <img src="{{ asset('storage/'. $testimoniItem->foto ) }}" class="my-testi-img m-0" alt="">
                            <h3 class="my-text-dark">{{ $testimoniItem->nama }}</h3>
                            <h4>{{ $testimoniItem->sebagai }}</h4>

                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span class="my-text-dark">{{ $testimoniItem->deskripsi }}</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <section id="testimonials" class="testimonials section my-bg-primary">

        <div class="wave-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,64L48,80C96,96,192,128,288,133.3C384,139,480,117,576,96C672,75,768,53,864,53.3C960,53,1056,75,1152,80C1248,85,1344,75,1392,69.3L1440,64L1440,0L0,0Z">
                </path>
            </svg>
        </div>
        <div class="container mb-5 text-center " data-aos="fade-up" data-aos-once="false">
            <h1 class="fs-1 text-white mt-5">Kegiatan</h1>
            <p class=text-white fs-6">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-once="false" style="z-index: 999999999 !important;">

            <div class="swiper mySwiper2 init-swiper">
                <script type="application/json" class="swiper-config">
                    {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
                </script>
                <div class="swiper-wrapper">
                    @foreach ($kegiatan as $kegiatanItem)
                    <a href="/kegiatan/{{$kegiatanItem->id}}" class="swiper-slide">
                        <div class="testimonial-item-kegiatan text-center bg-transparent">
                            <div class="testimonial-img-wrapper shadow">
                                <img src="{{ asset('storage/'. $kegiatanItem->foto ) }}" alt="" class="img-kegiatan">
                                <div class="overlay-text p-2 text-start">
                                    <h3 class="crop-text-kegiatan">{{ $kegiatanItem->judul }}</h3>
                                    <p>
                                        {{ $kegiatanItem->tanggal }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="wave-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,64L48,80C96,96,192,128,288,133.3C384,139,480,117,576,96C672,75,768,53,864,53.3C960,53,1056,75,1152,80C1248,85,1344,75,1392,69.3L1440,64L1440,150L0,150Z">
                </path>
            </svg>
        </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <div class="info-item d-flex flex-column">
                        <div class="container mb-5">
                            <h1 class="fs-1 my-text-dark">{{ $pertanyaan->judul }}</h1>
                            <p class="my-text-dark fs-6">{{ $pertanyaan->deskripsi }}</p>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('images/illust.png') }}" alt="" class="w-75">
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-once="false">
                    <form action="/pesan" method="POST">
                        @csrf
                        <div class="container row gy-4">

                            <div class="col-md-12 mb-0 mb-lg-1">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" id="name" name="nama" class="form-control rounded-5"
                                    placeholder="Contoh: Budi Santoso" required>
                            </div>

                            <div class="col-md-12 mb-0 mb-lg-1">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" id="email" name="email" class="form-control rounded-5"
                                    placeholder="Contoh: budi@example.com" required>
                            </div>

                            <div class="col-md-12 mb-0 mb-lg-1">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" id="subject" name="subjek" class="form-control rounded-5"
                                    placeholder="Contoh: Permintaan Informasi" required>
                            </div>

                            <div class="col-md-12 mb-0 mb-lg-1">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea id="message" class="form-control rounded-5" rows="6"
                                    placeholder="Contoh: Saya ingin mengetahui lebih lanjut tentang program yang ditawarkan."
                                    required name="pesan"></textarea>
                            </div>


                            <div class="col-md-12 text-center">
                                {{-- <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesanmu telah terkirim. Terima kasih!</div> --}}

                                <button type="submit" class="btn-green rounded-pill">Kirim</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

@include('partials.footer')

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>
@endsection