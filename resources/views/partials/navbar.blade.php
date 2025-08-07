<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <div class="container">

        <a href="{{ url('/') }}" class="navbar-brand">
            <h3 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>SD Ihsaniyah 1 Tegal</h3>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ url('/') }}"
                    class="nav-item nav-link {{ $active == 'index' ? 'active' : '' }}">Home</a>
                <a href="{{ url('/tentang-kami') }}"
                    class="nav-item nav-link {{ $active == 'tentang-kami' ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ url('/program') }}"
                    class="nav-item nav-link {{ $active == 'program' ? 'active' : '' }}">Program Sekolah</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="{{ url('/fasilitas') }}"
                            class="dropdown-item {{ $active == 'fasilitas' ? 'active' : '' }}">Fasilitas Sekolah</a>
                        <a href="{{ url('/ekstrakulikuler') }}"
                            class="dropdown-item {{ $active == 'ekstrakulikuler' ? 'active' : '' }}">Ekstrakulikuler</a>
                        <a href="{{ url('/prestasi-sekolah') }}"
                            class="dropdown-item {{ $active == 'prestasi-siswa' ? 'active' : '' }}">Prestasi Siswa</a>
                        <a href="{{ url('/kegiatan') }}"
                            class="dropdown-item {{ $active == 'kegiatan' ? 'active' : '' }}">Kegiatan Kami</a>

                    </div>
                </div>
                <a href="{{ url('/kontak') }}"
                    class="nav-item nav-link {{ $active == 'kontak' ? 'active' : '' }}">Kontak Kami</a>
            </div>
            <a href="https://wa.me/6287899101232?text=Assalamualaikum%20Saya%20Mau%20bertanya%20tentang%20..................."
                class="btn btn-primary rounded-pill px-3 d-none d-lg-block">WhatsApp<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
