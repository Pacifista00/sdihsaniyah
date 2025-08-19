@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="mt-5 pt-lg-5">

                        <h1 class="my-text-heading heading-cursor">Kontak Kami</h1>
                        <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                                Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>Kontak</h6>
                    </div>
                </div>
            </div>

        </section>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <!-- Kontak - Kiri -->
                    <div class="col-lg-6 mb-4">
                        <h1 class="fs-1 ">Hubungi Kami</h1>
                        <p class=" fs-6">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                        <div class="my-4">
                            <div class="contact-card"> <i class="bi bi-whatsapp"></i>
                                <div class="text"> <small>WhatsApp Call Center</small> <strong>628112642733</strong>
                                </div>
                            </div>
                            <div class="contact-card"> <i class="bi bi-envelope"></i>
                                <div class="text"> <small>Email</small> <strong>info@sdmuhsapen-yog.sch.id</strong> </div>
                            </div>
                            <div class="contact-card"> <i class="bi bi-telephone"></i>
                                <div class="text"> <small>Telepon</small> <strong>0274556674</strong> </div>
                            </div>
                            <div class="contact-card"> <i class="bi bi-clock"></i>
                                <div class="text"> <small>Jam Kerja</small> <strong>Senin-Jumat 07:00-14:30
                                        WIB</strong> </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lokasi / Google Maps - Kanan -->
                    <div class="col-lg-6">
                        <h1 class=" text-center mb-4">Lokasi</h1>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0726521495976!2d109.13880147590629!3d-6.881900167341194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9eac19f0389%3A0xaf5bf0346e498ec1!2sSD%20Ihsaniyah%201%20Kota%20Tegal!5e0!3m2!1sid!2sid!4v1755136316855!5m2!1sid!2sid"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-item d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                            <div class="mb-5">
                                <h1 class="fs-1 ">Sosial Media Kami</h1>
                                <p class=" fs-6">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <div class="my-5 row">
                                    <div class="col-lg-4">
                                        <div class="contact-card">
                                            <i class="bi bi-instagram"></i>
                                            <div class="text">
                                                <small>Instagram</small>
                                                <strong>628112642733</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-card">
                                            <i class="bi bi-facebook"></i>
                                            <div class="text">
                                                <small>Facebook</small>
                                                <strong>info@sdmuhsapen-yog.sch.id</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact-card">
                                            <i class="bi bi-youtube"></i>
                                            <div class="text">
                                                <small>Youtube</small>
                                                <strong>0274556674</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Info Item -->

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
