@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="mt-5 pt-lg-5">

                        <h1 class="my-text-heading">Prestasi Siswa</h1>
                        <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                                Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Prestasi Siswa</h6>
                    </div>
                </div>
            </div>

        </section>
        <section class="py-4">
            <div class="container">
                <div class="fullwidth-photo-stack">
                    <!-- Foto besar -->
                    <div class="stack-photo big-stack" style="background-image: url('{{ asset('images/sampul4.jpg') }}');">
                    </div>

                    <!-- Foto kecil kiri -->
                    <div class="stack-photo small-stack stack-left"
                        style="background-image: url('{{ asset('images/sampul5.jpg') }}');">
                    </div>

                    <!-- Foto kecil kanan -->
                    <div class="stack-photo small-stack stack-right"
                        style="background-image: url('{{ asset('images/sampul5.jpg') }}');">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start">
                            <h1 class="fs-1 text-dark my-4">Internasional</h1>
                            <div class="row">
                                <div class="">Drum Band 1</div>
                                <div class="">Drum Band 2</div>
                                <div class="">Drum Band 3</div>
                                <div class="">Drum Band 4</div>
                                <div class="">Drum Band 5</div>
                                <div class="">Drum Band 6</div>
                                <div class="">Drum Band 7</div>
                                <div class="">Drum Band 8</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start">
                            <h1 class="fs-1 text-dark my-4">Nasional</h1>
                            <div class="row">
                                <div class="">Drum Band 1</div>
                                <div class="">Drum Band 2</div>
                                <div class="">Drum Band 3</div>
                                <div class="">Drum Band 4</div>
                                <div class="">Drum Band 5</div>
                                <div class="">Drum Band 6</div>
                                <div class="">Drum Band 7</div>
                                <div class="">Drum Band 8</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start">
                            <h1 class="fs-1 text-dark my-4">Provinsi</h1>
                            <div class="row">
                                <div class="">Drum Band 1</div>
                                <div class="">Drum Band 2</div>
                                <div class="">Drum Band 3</div>
                                <div class="">Drum Band 4</div>
                                <div class="">Drum Band 5</div>
                                <div class="">Drum Band 6</div>
                                <div class="">Drum Band 7</div>
                                <div class="">Drum Band 8</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start">
                            <h1 class="fs-1 text-dark my-4">Kota</h1>
                            <div class="row">
                                <div class="">Drum Band 1</div>
                                <div class="">Drum Band 2</div>
                                <div class="">Drum Band 3</div>
                                <div class="">Drum Band 4</div>
                                <div class="">Drum Band 5</div>
                                <div class="">Drum Band 6</div>
                                <div class="">Drum Band 7</div>
                                <div class="">Drum Band 8</div>
                            </div>
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
