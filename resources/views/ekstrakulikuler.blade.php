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
                <h1 class="display-2 text-white animated slideInDown mb-4">Ekstrakulikuler</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Ekstrakulikuler</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Program Unggulan</p>
                        </h1>
                        <p class="mb-4">
                        <p>ᴥ Tahfidzul Qur'an </p>
                        <p>ᴥ English Program </p>
                        <p>ᴥ Robotic Class </p>
                        <p>ᴥ Pantomim </p>
                        <p>ᴥ Paduan Suara </p>


                        </p>


                        <div class="row g-4 align-items-center">


                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/ek3.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/abot2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/abot3.jpg" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- About Start -->


        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Ekstrakulikuler Wajib </p>
                        </h1>
                        <p class="mb-4">

                        <p>ᴥ Kepanduan </p>
                        <p>ᴥ Renang </p>
                        <p>ᴥ Beladiri </p>



                        </p>


                        <h1 class="mb-4">Ekstrakulikuler Pilihan </p>
                        </h1>
                        <p class="mb-4">

                        <p>ᴥ Tilawah </p>
                        <p>ᴥ Kaligrafi </p>
                        <p>ᴥ Rebana </p>
                        <p>ᴥ Math Club </p>
                        <p>ᴥ Sains Club </p>
                        <p>ᴥ Performance Club </p>
                        <p>ᴥ Mewarnai </p>
                        <p>ᴥ Menari </p>
                        <p>ᴥ Futsal </p>
                        <p>ᴥ Basket </p>
                        <p>ᴥ Volly </p>
                        <p>ᴥ Panahan </p>
                        <p>ᴥ Bulu tangkis </p>

                        </p>


                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="index.html">Kembali<i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/abot1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/abot2.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/abot3.jpg" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- About End -->

        @include('partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
