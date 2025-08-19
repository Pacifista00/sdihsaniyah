@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
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
                    <div class="col-lg-6 text-center mb-5 d-flex align-items-center justify-content-center">
                       <div class="flex-1">
    <div class="row mb-4 justify-content-center">
        <div class="col-auto position-relative d-inline-block">
            <!-- Gambar besar -->
            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Gambar Besar" class="circle-img shadow">

            <!-- Gambar kecil 1 -->
            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Gambar Kecil 1"
                class="circle-img-small shadow small-img-1">

            <!-- Gambar kecil 2 -->
            <img src="{{ asset('images/sampul2.jpeg') }}" alt="Gambar Kecil 2"
                class="circle-img-small shadow small-img-2">
        </div>
    </div>
</div>

                    </div>
                    <div class="col-lg-6">
                        <h1>SD Ihsaniyah 1 Kota Tegal</h1>
                        <p class="my-3">SD Ihsaniyah 1 Kota Tegal didaulat menjadi Sekolah Rujukan Jenjang Sekolah Dasar
                            oleh Pemerintah
                            Kota Tegal dan Dinas Pendidikan dan Kebudayaan Kota Tegal. Alhamdulillah Terima Kasih atas doa,
                            dukungan dan usaha kita semua sehingga SD Ihsaniyah 1 Kota Tegal berhasil meraih predikat
                            tersebut.</p>
                        <h4>Visi :</h4>
                        <p class="my-3">SD Ihsaniyah 1 Kota Tegal didaulat menjadi Sekolah Rujukan Jenjang Sekolah Dasar
                            oleh Pemerintah
                            Kota Tegal dan Dinas Pendidikan dan Kebudayaan Kota Tegal. Alhamdulillah Terima Kasih atas doa,
                            dukungan dan usaha kita semua sehingga SD Ihsaniyah 1 Kota Tegal berhasil meraih predikat
                            tersebut.</p>
                        <h4>Misi :</h4>
                        <ul>
                            <li>Meningkatkan kualitas iman dan taqwa setiap pribadi peserta didik.</li>
                            <li>Menanamkan aqidah, ibadah, dan akhlak sesuai dengan Al-Qur’an dan As-Sunnah.</li>
                            <li>Mengoptimalkan proses pembelajaran dan bimbingan bagi peserta didik.</li>
                            <li>Mengembangkan pengetahuan di bidang IPTEK, bahasa, bakat, dan minat peserta didik.</li>
                            <li>Menjalin kerja sama yang harmonis antara warga sekolah dengan lingkungan.</li>
                        </ul>
                        <h4>Tujuan Sekolah :</h4>
                        <ul>
                            <li>Mampu mengamalkan seluruh hasil proses pembelajaran dalam kegiatan pembiasaan.</li>
                            <li>Menguasai dasar-dasar ilmu diniyah sebagai bekal untuk mengamalkan ajaran Islam.</li>
                            <li>Menguasai dasar-dasar ilmu pengetahuan dan teknologi.</li>
                            <li>Meraih prestasi akademik maupun non-akademik minimal tingkat kecamatan.</li>
                            <li>Menjadi sekolah pelopor yang diminati masyarakat.</li>
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
