<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('images/logosd.png') }}" class="my-4" alt=""
                    style="width: 30px; height: 30px; object-fit: cover;">
            </span>
            <span class="fs-3 demo menu-text fw-bolder ms-2">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Redaksi</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Account Settings">Beranda</div>
            </a>

            <ul class=" menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/jumbotron" class="menu-link">
                        <div data-i18n="Without">Jumbotron</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/profil" class="menu-link">
                        <div data-i18n="Without">Profil</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
                    <a href="/dashboard/jumbotron" class="menu-link">
                        <div data-i18n="Without">Info PPDB</div>
                    </a>
                </li> --}}
                <li class="menu-item">
                    <a href="/dashboard/foto-kurikulum-program" class="menu-link">
                        <div data-i18n="Without">Foto Kurikulum & Program</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/kurikulum-program" class="menu-link">
                        <div data-i18n="Without">Kurikulum & Program</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/prestasi-section" class="menu-link">
                        <div data-i18n="Without">Prestasi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/testimoni" class="menu-link">
                        <div data-i18n="Without">Testimoni</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/pertanyaan" class="menu-link">
                        <div data-i18n="Without">Pertanyaan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Account Settings">Tentang Kami</div>
            </a>

            <ul class=" menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/foto-tentang-kami" class="menu-link">
                        <div data-i18n="Without">Foto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/deskripsi" class="menu-link">
                        <div data-i18n="Without">Deskripsi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/visi" class="menu-link">
                        <div data-i18n="Without">Visi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/misi-sekolah" class="menu-link">
                        <div data-i18n="Without">Misi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/tujuan" class="menu-link">
                        <div data-i18n="Without">Tujuan</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="/dashboard/program" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Program Sekolah</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/dashboard/fasilitas" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Analytics">Fasilitas Sekolah</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-football"></i>
                <div data-i18n="Account Settings">Ekstrakulikuler</div>
            </a>

            <ul class=" menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/foto-ekstrakulikuler" class="menu-link">
                        <div data-i18n="Without">Foto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/ekstrakulikuler" class="menu-link">
                        <div data-i18n="Without">Ekstrakulikuler</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-trophy"></i>
                <div data-i18n="Account Settings">Prestasi Siswa</div>
            </a>

            <ul class=" menu-sub">
                <li class="menu-item">
                    <a href="/dashboard/foto-prestasi" class="menu-link">
                        <div data-i18n="Without">Foto</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/dashboard/prestasi" class="menu-link">
                        <div data-i18n="Without">Prestasi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/dashboard/kegiatan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Analytics">Kegiatan</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/dashboard/kontak" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone"></i>
                <div data-i18n="Analytics">Kontak</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Akademik</span>
        </li>
        <li class="menu-item">
            <a href="/dashboard/spmb" class="menu-link">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div data-i18n="Analytics">Pendaftar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/dashboard/ppdb" class="menu-link">
                <i class="menu-icon tf-icons bx bx-flag"></i>
                <div data-i18n="Analytics">PPDB</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Kelola</span>
        </li>
        @if ($loggedUser->role == 'super-admin')
        <li class="menu-item">
            <a href="/dashboard/user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">User</div>
            </a>
        </li>
        @endif
        <li class="menu-item">
            <a href="/dashboard/pesan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-rounded"></i>
                <div data-i18n="Analytics">Pesan Pertanyaan</div>
            </a>
        </li>

    </ul>
</aside>
<!-- / Menu -->