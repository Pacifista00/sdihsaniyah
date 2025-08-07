@extends('layouts.main')
@section('content')
    <div class=" bg-white p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        @include('partials.navbar')


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('images/sampul4.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">SD IHSANIYAH 1 KOTA TEGAL
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Berkomitmen untuk mengembangkan
                                        kompetensi anak dengan didasari karakter yang kuat. Dengan harapan ilmu yang
                                        diperoleh dapat lebih mendekatkan diri kepada Allah SWT, berguna bagi agama
                                        Islam dan Negara. </p>
                                    <a href="https://wa.me/6287899101232?text=Assalamualaikum%20Saya%20Mau%20bertanya%20tentang%20..................."
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Hubungi
                                        Kami</a>
                                    <a href="about.html"
                                        class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Selanjutnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('images/sampul5.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">SD IHSANIYAH 1 KOTA TEGAL
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Mengemban amanah untuk memberikan
                                        pendidikan yang terbaik dengan didukung tenaga pendidik yang kompeten dan
                                        berdedikasi tinggi dengan Visi "Terwudnya Insan Kamil yang memiliki Aqidah yang
                                        Shohihah, ibadah yang salimah, akhlak yang karimah, akal yang Zakiyah dan
                                        Tsaqofatul Bi'ah".</p>
                                    <a href="https://wa.me/6287899101232?text=Assalamualaikum%20Saya%20Mau%20bertanya%20tentang%20..................."
                                        class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Hubungi
                                        Kami</a>
                                    <a href="about.html"
                                        class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Selanjutnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->



        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">SD Ihsaniyah 1 Kota Tegal</h1>
                        <p>berkomitmen untuk mengembangkan kompetensi anak dengan didasari karakter yang kuat. Dengan
                            harapan ilmu yang diperoleh dapat lebih mendekatkan diri kepada Allah SWT, berguna bagi
                            agama Islam dan Negara. </p>
                        <p>SD Ihsaniyah 1 Kota Tegal mengemban amanah untuk memberikan pendidikan yang terbaik dengan
                            didukung tenaga pendidik yang kompeten dan berdedikasi tinggi dengan Visi "Terwudnya Insan
                            Kamil yang memiliki Aqidah yang Shohihah, ibadah yang salimah, akhlak yang karimah, akal
                            yang Zakiyah dan Tsaqofatul Bi'ah".</p>
                        <div class="row g-4 align-items-center">
                            <a class="btn btn-primary py-3 px-5" href="">Lihat Selengkapnya<i
                                    class="fa fa-arrow-right ms-2"></i></a>

                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3"
                                    src="{{ asset('images/abot1.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('images/abot2.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('images/abot3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="{{ asset('images/asatidz.jpg') }}"
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Dewan Asatidz dan Asatidzah SD Ihsaniyah 1 Kota Tegal</h1>
                                <p class="mb-4">Didukung tenaga pendidik yang kompeten dan berdedikasi tinggi dengan
                                    Visi "Terwudnya Insan Kamil yang memiliki Aqidah yang Shohihah, ibadah yang salimah,
                                    akhlak yang karimah, akal yang Zakiyah dan Tsaqofatul Bi'ah".
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">JAMINAN KUALITAS</h1>
                    <p>Beberapa Jaminan Kualitas Dari Kami</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/tasmi.jpg') }}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Hafal Al Qur’an minimal 1
                                    juz</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Gemar tilawah</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Hafal hadits-hadits
                                    pilihan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/abot3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Hafal do’a-do’a
                                    pilihan</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Memiliki aqidah yang
                                    benar</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Berbakti kepada orangtua
                                    dan
                                    guru</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/juara.jpg') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Memiliki kemampuan
                                    akademis</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Memiliki kemampuan
                                    berkomunikasi
                                    yang baik</a>
                                <a class="d-block text-center h4 mt-3 mb-4" href="">▪Memiliki kemandirian
                                    belajar</a>

                            </div>
                        </div>
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
