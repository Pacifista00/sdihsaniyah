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
                <h1 class="fs-1  mb-3">{{ $kegiatan->judul }}</h1>
            </div>
            <div class="text-center">
                <img src="{{ asset('storage/'. $kegiatan->foto) }}" alt="" class="thumbnail-kegiatan">
            </div>
            <div class="container-kegiatan mx-auto mt-5">
                <p class="my-3 fs-6 text-secondary fst-italic">{{
                    \Carbon\Carbon::parse($kegiatan->tanggal)->locale('id')->translatedFormat('d
                    F Y') }} / by <span class="my-text-dark">SD Ihsaniyah 1 Kota Tegal</span></p>
                <p class="fs-5">{{ $kegiatan->deskripsi }}</p>

                @php
                $fotos = [$kegiatan->foto2, $kegiatan->foto3, $kegiatan->foto4, $kegiatan->foto5];
                $fotos = array_filter($fotos); // buang null
                @endphp

                <div class="row justify-content-center g-3">
                    @foreach ($fotos as $foto)
                    <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="ratio ratio-1x1" style="max-width: 250px;">
                            <img src="{{ asset('storage/' . $foto) }}" class="img-fluid rounded shadow w-100 h-100"
                                style="object-fit: cover;" alt="Foto Kegiatan">
                        </div>
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
<script>
    window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    if (preloader) preloader.style.display = "none"; // hilangin preloader
});
</script>

@endsection