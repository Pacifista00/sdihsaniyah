@extends('layouts.main')
@section('content')
    <div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('partials.navbar')

        <!-- Page Header End -->
        <div class="py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Fasilitas</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Fasilitas</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Fasilitas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">FASILITAS UNGGULAN</h1>
                    <p>Untuk menunjang segala proses belajar mengajar, kami memiliki fasilitas yang sangat lengkap
                        diantaranya.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/classes-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Ruang kelas yang nyaman, bersih
                                    dan ber AC</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/classes-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Media Pembelajaran Lengkap</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/lab.jpg') }}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">LAB KOMPUTER</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/classes-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Perpustakaan dengan akreditasi
                                    A</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/classes-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Kantin Sehat bersertifikat
                                    BPOM</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/classes-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Taman Edukasi</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/abot2.jpg') }}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Gazebo</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/abot2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Tempat cuci tangan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/abot2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Toilet Bersih</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">FASILITAS LAIN NYA</h1>
                        <P>▪Ruang UKS bersih </p>
                        <P>▪Tempat cuci tangan di 59 titik </p>
                        <P>▪Green House</p>
                        <P>▪Area Outbound</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Classes End -->

        @include('partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
