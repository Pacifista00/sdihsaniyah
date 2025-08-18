<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="container-fluid container-lg position-relative d-flex align-items-center justify-content-between bg-white pill-navbar shadow">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('images/logosd.png') }}" alt="" class="ms-2 me-3">
            <h1 class="sitename my-text-primary fs-5">SD Ihsaniyah 1 Kota Tegal</h1>
        </a>

        <nav id="navmenu" class="navmenu py-2">
            <ul>
                <li><a href="{{ url('/') }}" class="active hover-underline">Beranda</a></li>
                <li><a href="{{ url('/tentang-kami') }}" class="text-dark hover-underline">Tentang Kami</a></li>
                <li><a href="{{ url('/program') }}" class="text-dark hover-underline">Program Sekolah</a></li>
                <li class="dropdown" class="text-dark"><a href="#" class="text-dark"><span>Informasi</span><i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/fasilitas') }}">Fasilitas</a></li>
                        <li><a href="{{ url('/ekstrakulikuler') }}">Ekstrakulikuler</a></li>
                        <li><a href="{{ url('/prestasi-siswa') }}">Prestasi Siswa</a></li>
                        <li><a href="{{ url('/kegiatan') }}">Kegiatan</a></li>
                        <li><a href="{{ url('/daftar-spmb') }}">Daftar SPMB</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/kontak') }}" class="text-dark hover-underline">Kontak</a></li>
                <li class="ms-3">
                    <button type="button" class="btn-kids rounded-pill px-4">Daftar</button>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list text-secondary"></i>
        </nav>

    </div>
</header>
