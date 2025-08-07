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
        <div class=" py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Tentang Kami</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
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
                        <h1 class="mb-4">SD Ihsaniyah 1 Kota Tegal</p>
                        </h1>
                        <p class="mb-4">SD Ihsaniyah 1 Kota Tegal didaulat menjadi Sekolah Rujukan Jenjang Sekolah
                            Dasar oleh Pemerintah Kota Tegal dan Dinas Pendidikan dan Kebudayaan Kota Tegal.
                            Alhamdulillah Terima Kasih atas doa, dukungan dan usaha kita semua sehingga SD Ihsaniyah 1
                            Kota Tegal berhasil meraih predikat tersebut.</p>

                        <p><b>VISI</b></p>
                        <p>Visi Sekolah Visi SD Ihsaniyah 1 Kota Tegal adalah sebagai berikut : “Terwujudnya insan kamil
                            yang memiliki aqidah yang shohihah, ibadah yang salimah, akhlak yang karimah, akal yang
                            dzakiyah dan tsaqofatul bi'ah” </p>

                        <p><b>MISI</b></p>
                        <p>Misi Sekolah Untuk mencapai Visi sekolah tersebut di atas, maka SD Ihsaniyah 1 Kota Tegal
                            menyusun Misi Sekolah sebagai berikut :</p>

                        <p>
                        <p>1. Meningkatkan kwalitas iman dan taqwa setiap pribadi peserta didik</p>
                        <p>2. Menanamkan aqidah, ibadah, dan akhlak sesuai dengan Al – Qur’an dan As – Sunnah pada
                            peserta didik sebagai modal menghadapi kehidupan di masa depan</p>
                        <p>3. Mengoptimalkan proses pembelajaran dan bimbingan bagi peserta didik.</p>
                        <p>4. Mengembangkan pengetahuan di bidang IPTEK, bahasa, bakat dan minat peserta didik.</p>
                        <p>5. Menjalin kerjasama yang harmonis antara warga sekolah dengan lingkungan.</p>
                        </p>


                        <p><b>Tujuan Sekolah</b></p>
                        <p>Adapun Tujuan yang akan dicapai SD Ihsaniyah 1 Kota Tegal adalah sebagai berikut :</p>

                        <p>Mampu mengamalkan seluruh hasil proses pembelajaran dalam kegiatan pembiasaan.</p>
                        <p>Menguasai dasar – dasar ilmu diniyah sebagai bekal untuk mengamalkan ajaran islam dalam
                            kehidupan sehari hari.</p>
                        <p>Menguasai dasar-dasar ilmu pengetahuan dan teknologi sebagai bekal untuk melanjutkan ke
                            jenjang yang lebih tinggi serta menghadapi tantangan global.</p>
                        <p>Meraih prestasi akademik maupun non akademik minimal tingkat kecamatan.</p>
                        <p>Menjadi sekolah pelopor yang diminati masyarakat.</p>

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

        @include('partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
