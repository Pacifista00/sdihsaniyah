@extends('dashboard.layouts.main')
@section('content-dashboard')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('dashboard.partials.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            @include('dashboard.partials.navbar')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Dashboard /</span>
                                {{ $active }}
                            </h4>
                        </div>
                        <div>
                            {{-- <button class="btn btn-success rounded-pill py-2" data-bs-toggle="modal"
                                data-bs-target="#tambahJumbotron">Tambah</button> --}}
                            <!-- Modal -->
                            {{-- <div class="modal fade" id="tambahJumbotron" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/dashboard/pendaftar/insert') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto" class="form-label">Foto</label>
                                                        <input type="file" id="foto" class="form-control" name="foto" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" id="judul" class="form-control"
                                                            placeholder="Masukkan judul" name="judul" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                                        <textarea type="text" id="deskripsi" class="form-control"
                                                            placeholder="Masukkan Deskripsi"
                                                            name="deskripsi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    Tutup
                                                </button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pendaftaran</th>
                                        {{-- <th>Deskripsi</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($pendaftars as $pendaftarItem)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $pendaftarItem->foto) }}"
                                                class="img-table shadow-md" alt="">
                                        </td>
                                        <td>{{ $pendaftarItem->nama_lengkap }}</td>
                                        <td>{{ $pendaftarItem->created_at }}</td>

                                        {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                        <td class="mx-0">
                                            <div class="mb-1">
                                                <button class="btn btn-info w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#detailPendaftar{{ $pendaftarItem->id }}">Detail</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#editPendaftar{{ $pendaftarItem->id }}">Edit</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#hapusPendaftar{{ $pendaftarItem->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal detail start --}}
                                    <div class="modal fade" id="detailPendaftar{{ $pendaftarItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Detail Pendaftar</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <img src="{{ asset('storage/' . $pendaftarItem->foto) }}"
                                                            class="shadow-md mb-4"
                                                            alt=""
                                                            style="width:165px; height:225px; object-fit:cover; border-radius:8px;">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h6>NIK</h6>
                                                            <h6>NISN</h6>
                                                            <h6>Nama Lengkap</h6>
                                                            <h6>Nama Panggilan</h6>
                                                            <h6>Tempat Lahir</h6>
                                                            <h6>Tanggal Lahir</h6>
                                                            <h6>Jenis Kelamin</h6>
                                                            <h6>Agama</h6>
                                                            <h6>Anak ke</h6>
                                                            <h6>Jumlah Saudara</h6>
                                                            <h6>Bahasa yang digunakan</h6>
                                                            <h6>Berat Badan</h6>
                                                            <h6>Tinggi Badan</h6>
                                                            <h6>Riwayat Penyakit</h6>
                                                            <h6>Hobi</h6>
                                                            <h6>Bakat</h6>
                                                            <h6>Alamat</h6>
                                                            <h6>Jenis Kelas</h6>
                                                            <h6>Asal Pendidikan</h6>
                                                            <h6>Nama Sekolah</h6>
                                                            <h6>Alamat Sekolah</h6>
                                                            <h6>Nama Ayah</h6>
                                                            <h6>NIK Ayah</h6>
                                                            <h6>Tempat Lahir Ayah</h6>
                                                            <h6>Tanggal Lahir Ayah</h6>
                                                            <h6>Pendidikan Ayah</h6>
                                                            <h6>Pekerjaan Ayah</h6>
                                                            <h6>Penghasilan Ayah</h6>
                                                            <h6>Alamat Ayah</h6>
                                                            <h6>No Telp Ayah</h6>
                                                            <h6>Email Ayah</h6>
                                                            <h6>Nama Ibu</h6>
                                                            <h6>NIK Ibu</h6>
                                                            <h6>Tempat Lahir Ibu</h6>
                                                            <h6>Tanggal Lahir Ibu</h6>
                                                            <h6>Pendidikan Ibu</h6>
                                                            <h6>Pekerjaan Ibu</h6>
                                                            <h6>Penghasilan Ibu</h6>
                                                            <h6>Alamat Ibu</h6>
                                                            <h6>No Telp Ibu</h6>
                                                            <h6>Email Ibu</h6>
                                                        </div>
                                                        <div class="col-8">
                                                            <h6>: {{ $pendaftarItem->nik }}</h6>
                                                            <h6>: {{ $pendaftarItem->nisn }}</h6>
                                                            <h6>: {{ $pendaftarItem->nama_lengkap }}</h6>
                                                            <h6>: {{ $pendaftarItem->nama_panggilan }}</h6>
                                                            <h6>: {{ $pendaftarItem->tempat_lahir }}</h6>
                                                            <h6>: {{ $pendaftarItem->tanggal_lahir }}</h6>
                                                            <h6>: {{ $pendaftarItem->jenis_kelamin }}</h6>
                                                            <h6>: {{ $pendaftarItem->agama }}</h6>
                                                            <h6>: {{ $pendaftarItem->anak_ke }}</h6>
                                                            <h6>: {{ $pendaftarItem->jumlah_saudara }}</h6>
                                                            <h6>: {{ $pendaftarItem->bahasa }}</h6>
                                                            <h6>: {{ $pendaftarItem->berat }} kg</h6>
                                                            <h6>: {{ $pendaftarItem->tinggi }} cm</h6>
                                                            <h6>: {{ $pendaftarItem->riwayat_penyakit }}</h6>
                                                            <h6>: {{ $pendaftarItem->hobi }}</h6>
                                                            <h6>: {{ $pendaftarItem->bakat }}</h6>
                                                            <h6>: {{ $pendaftarItem->alamat }}</h6>
                                                            <h6>: {{ $pendaftarItem->jenis_kelas }}</h6>
                                                            <h6>: {{ $pendaftarItem->asal_pendidikan }}</h6>
                                                            <h6>: {{ $pendaftarItem->nama_sekolah }}</h6>
                                                            <h6>: {{ $pendaftarItem->alamat_sekolah }}</h6>
                                                            <h6>: {{ $pendaftarItem->nama_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->nik_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->tempat_lahir_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->tanggal_lahir_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->pendidikan_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->pekerjaan_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->penghasilan_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->alamat_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->no_telepon_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->email_ayah }}</h6>
                                                            <h6>: {{ $pendaftarItem->nama_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->nik_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->tempat_lahir_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->tanggal_lahir_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->pendidikan_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->pekerjaan_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->penghasilan_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->alamat_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->no_telepon_ibu }}</h6>
                                                            <h6>: {{ $pendaftarItem->email_ibu }}</h6>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal detail end --}}
                                    {{-- modal edit start --}}
                                    <div class="modal fade" id="editPendaftar{{ $pendaftarItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/pendaftar/update/{{ $pendaftarItem->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto" class="form-label">Foto</label>
                                                                <input type="file" id="foto" class="form-control"
                                                                    name="foto" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="berkasKK" class="form-label">Berkas KK</label>
                                                                <input type="file" id="berkasKK" class="form-control"
                                                                    name="berkas_kk" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="berkasAkta" class="form-label">Berkas Akta</label>
                                                                <input type="file" id="berkasAkta" class="form-control"
                                                                    name="berkas_akta" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nik" class="form-label">NIK</label>
                                                                <input type="text" id="nik" class="form-control"
                                                                    placeholder="Masukkan nik" name="nik"
                                                                    value="{{ $pendaftarItem->nik }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nisn" class="form-label">NISN</label>
                                                                <input type="text" id="nisn" class="form-control"
                                                                    placeholder="Masukkan nisn" name="nisn"
                                                                    value="{{ $pendaftarItem->nisn }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                                <input type="text" id="nama_lengkap" class="form-control"
                                                                    placeholder="Masukkan nama_lengkap" name="nama_lengkap"
                                                                    value="{{ $pendaftarItem->nama_lengkap }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                                                <input type="text" id="nama_panggilan" class="form-control"
                                                                    placeholder="Masukkan nama_panggilan" name="nama_panggilan"
                                                                    value="{{ $pendaftarItem->nama_panggilan }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                                <input type="text" id="tempat_lahir" class="form-control"
                                                                    placeholder="Masukkan tempat_lahir" name="tempat_lahir"
                                                                    value="{{ $pendaftarItem->tempat_lahir }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                                <input type="date" id="tanggal_lahir" class="form-control"
                                                                    placeholder="Masukkan tanggal_lahir" name="tanggal_lahir"
                                                                    value="{{ $pendaftarItem->tanggal_lahir }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                                    <option value="laki-laki" {{ $pendaftarItem->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                                                    <option value="perempuan" {{ $pendaftarItem->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="agama" class="form-label">Agama</label>
                                                                <select id="agama" name="agama" class="form-control">
                                                                    <option value="">-- Pilih Agama --</option>
                                                                    <option value="islam" {{ $pendaftarItem->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                                                    <option value="kristen" {{ $pendaftarItem->agama == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                                                    <option value="katolik" {{ $pendaftarItem->agama == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                                                    <option value="hindu" {{ $pendaftarItem->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                                                    <option value="buddha" {{ $pendaftarItem->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                                                    <option value="konghucu" {{ $pendaftarItem->agama == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="anak_ke" class="form-label">Anak Ke</label>
                                                                <input type="text" id="anak_ke" class="form-control"
                                                                    placeholder="Masukkan anak_ke" name="anak_ke"
                                                                    value="{{ $pendaftarItem->anak_ke }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="jumlah_saudara" class="form-label">Jumlah Saudara</label>
                                                                <input type="text" id="jumlah_saudara" class="form-control"
                                                                    placeholder="Masukkan jumlah_saudara" name="jumlah_saudara"
                                                                    value="{{ $pendaftarItem->jumlah_saudara }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="bahasa" class="form-label">Bahasa Yang digunakan</label>
                                                                <input type="text" id="bahasa" class="form-control"
                                                                    placeholder="Masukkan bahasa" name="bahasa"
                                                                    value="{{ $pendaftarItem->bahasa }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="berat" class="form-label">Berat Badan</label>
                                                                <input type="number" id="berat" class="form-control"
                                                                    placeholder="Masukkan berat" name="berat"
                                                                    value="{{ $pendaftarItem->berat }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tinggi" class="form-label">Tinggi Badan</label>
                                                                <input type="number" id="tinggi" class="form-control"
                                                                    placeholder="Masukkan tinggi" name="tinggi"
                                                                    value="{{ $pendaftarItem->tinggi }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                                                                <input type="text" id="riwayat_penyakit" class="form-control"
                                                                    placeholder="Masukkan riwayat_penyakit" name="riwayat_penyakit"
                                                                    value="{{ $pendaftarItem->riwayat_penyakit }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="hobi" class="form-label">Hobi</label>
                                                                <input type="text" id="hobi" class="form-control"
                                                                    placeholder="Masukkan hobi" name="hobi"
                                                                    value="{{ $pendaftarItem->hobi }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="bakat" class="form-label">Bakat</label>
                                                                <input type="text" id="bakat" class="form-control"
                                                                    placeholder="Masukkan bakat" name="bakat"
                                                                    value="{{ $pendaftarItem->bakat }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="alamat" class="form-label">Alamat</label>
                                                                <textarea type="text" id="alamat" class="form-control"
                                                                    placeholder="Masukkan alamat" name="alamat">{{ $pendaftarItem->alamat }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="jenis_kelas" class="form-label">Jenis Kelas</label>
                                                                <select id="jenis_kelas" name="jenis_kelas" class="form-control">
                                                                    {{$pendaftarItem->jenis_kelas}}
                                                                    <option value="">-- Pilih Jenis Kelas --</option>
                                                                    <option value="bilingual" {{ $pendaftarItem->jenis_kelas == 'bilingual' ? 'selected' : '' }}>Bilingual</option>
                                                                    <option value="intensif" {{ $pendaftarItem->jenis_kelas == 'intensif' ? 'selected' : '' }}>Intensif</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="asal_pendidikan" class="form-label">Asal Pendidikan</label>
                                                                <select id="asal_pendidikan" name="asal_pendidikan" class="form-control">
                                                                    <option value="">-- Pilih Asal Pendidikan --</option>
                                                                    <option value="tk" {{ $pendaftarItem->asal_pendidikan == 'tk' ? 'selected' : '' }}>TK</option>
                                                                    <option value="kb" {{ $pendaftarItem->asal_pendidikan == 'kb' ? 'selected' : '' }}>KB</option>
                                                                    <option value="ra" {{ $pendaftarItem->asal_pendidikan == 'ra' ? 'selected' : '' }}>RA</option>
                                                                    <option value="sps" {{ $pendaftarItem->asal_pendidikan == 'sps' ? 'selected' : '' }}>SPS</option>
                                                                    <option value="tpa" {{ $pendaftarItem->asal_pendidikan == 'TPA' ? 'selected' : '' }}>TPA</option>
                                                                    <option value="paud" {{ $pendaftarItem->asal_pendidikan == 'PAUD' ? 'selected' : '' }}>PAUD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                                                <input type="text" id="nama_sekolah" class="form-control"
                                                                    placeholder="Masukkan nama_sekolah" name="nama_sekolah"
                                                                    value="{{ $pendaftarItem->nama_sekolah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="alamat_sekolah" class="form-label">Alamat Sekolah</label>
                                                                <input type="text" id="alamat_sekolah" class="form-control"
                                                                    placeholder="Masukkan alamat_sekolah" name="alamat_sekolah"
                                                                    value="{{ $pendaftarItem->alamat_sekolah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                                                <input type="text" id="nama_ayah" class="form-control"
                                                                    placeholder="Masukkan nama_ayah" name="nama_ayah"
                                                                    value="{{ $pendaftarItem->nama_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nik_ayah" class="form-label">NIK Ayah</label>
                                                                <input type="text" id="nik_ayah" class="form-control"
                                                                    placeholder="Masukkan nik_ayah" name="nik_ayah"
                                                                    value="{{ $pendaftarItem->nik_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tempat_lahir_ayah" class="form-label">Tempat Lahir Ayah</label>
                                                                <input type="text" id="tempat_lahir_ayah" class="form-control"
                                                                    placeholder="Masukkan tempat_lahir_ayah" name="tempat_lahir_ayah"
                                                                    value="{{ $pendaftarItem->tempat_lahir_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tanggal_lahir_ayah" class="form-label">Tanggal Lahir Ayah</label>
                                                                <input type="date" id="tanggal_lahir_ayah" class="form-control"
                                                                    placeholder="Masukkan tanggal_lahir_ayah" name="tanggal_lahir_ayah"
                                                                    value="{{ $pendaftarItem->tanggal_lahir_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah</label>
                                                                <input type="text" id="pendidikan_ayah" class="form-control"
                                                                    placeholder="Masukkan pendidikan_ayah" name="pendidikan_ayah"
                                                                    value="{{ $pendaftarItem->pendidikan_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                                                <input type="text" id="pekerjaan_ayah" class="form-control"
                                                                    placeholder="Masukkan pekerjaan_ayah" name="pekerjaan_ayah"
                                                                    value="{{ $pendaftarItem->pekerjaan_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="penghasilan_ayah" class="form-label">Penghasilan Ayah</label>
                                                                <input type="number" id="penghasilan_ayah" class="form-control"
                                                                    placeholder="Masukkan penghasilan_ayah" name="penghasilan_ayah"
                                                                    value="{{ $pendaftarItem->penghasilan_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="alamat_ayah" class="form-label">Alamat Ayah</label>
                                                                <textarea type="text" id="alamat_ayah" class="form-control"
                                                                    placeholder="Masukkan alamat_ayah" name="alamat_ayah">{{ $pendaftarItem->alamat_ayah }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="no_telepon_ayah" class="form-label">No Telepon Ayah</label>
                                                                <input type="text" id="no_telepon_ayah" class="form-control"
                                                                    placeholder="Masukkan no_telepon_ayah" name="no_telepon_ayah"
                                                                    value="{{ $pendaftarItem->no_telepon_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="email_ayah" class="form-label">Alamat Ayah</label>
                                                                <input type="text" id="email_ayah" class="form-control"
                                                                    placeholder="Masukkan email_ayah" name="email_ayah"
                                                                    value="{{ $pendaftarItem->email_ayah }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                                                <input type="text" id="nama_ibu" class="form-control"
                                                                    placeholder="Masukkan nama_ibu" name="nama_ibu"
                                                                    value="{{ $pendaftarItem->nama_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nik_ibu" class="form-label">NIK Ibu</label>
                                                                <input type="text" id="nik_ibu" class="form-control"
                                                                    placeholder="Masukkan nik_ibu" name="nik_ibu"
                                                                    value="{{ $pendaftarItem->nik_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tempat_lahir_ibu" class="form-label">Tempat Lahir Ibu</label>
                                                                <input type="text" id="tempat_lahir_ibu" class="form-control"
                                                                    placeholder="Masukkan tempat_lahir_ibu" name="tempat_lahir_ibu"
                                                                    value="{{ $pendaftarItem->tempat_lahir_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tanggal_lahir_ibu" class="form-label">Tanggal Lahir Ibu</label>
                                                                <input type="date" id="tanggal_lahir_ibu" class="form-control"
                                                                    placeholder="Masukkan tanggal_lahir_ibu" name="tanggal_lahir_ibu"
                                                                    value="{{ $pendaftarItem->tanggal_lahir_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
                                                                <input type="text" id="pendidikan_ibu" class="form-control"
                                                                    placeholder="Masukkan pendidikan_ibu" name="pendidikan_ibu"
                                                                    value="{{ $pendaftarItem->pendidikan_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                                                <input type="text" id="pekerjaan_ibu" class="form-control"
                                                                    placeholder="Masukkan pekerjaan_ibu" name="pekerjaan_ibu"
                                                                    value="{{ $pendaftarItem->pekerjaan_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="penghasilan_ibu" class="form-label">Penghasilan Ibu</label>
                                                                <input type="number" id="penghasilan_ibu" class="form-control"
                                                                    placeholder="Masukkan penghasilan_ibu" name="penghasilan_ibu"
                                                                    value="{{ $pendaftarItem->penghasilan_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="alamat_ibu" class="form-label">Alamat Ibu</label>
                                                                <textarea type="text" id="alamat_ibu" class="form-control"
                                                                    placeholder="Masukkan alamat_ibu" name="alamat_ibu">{{ $pendaftarItem->alamat_ibu }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="no_telepon_ibu" class="form-label">No Telepon Ibu</label>
                                                                <input type="text" id="no_telepon_ibu" class="form-control"
                                                                    placeholder="Masukkan no_telepon_ibu" name="no_telepon_ibu"
                                                                    value="{{ $pendaftarItem->no_telepon_ibu }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="email_ibu" class="form-label">Alamat Ibu</label>
                                                                <input type="text" id="email_ibu" class="form-control"
                                                                    placeholder="Masukkan email_ibu" name="email_ibu"
                                                                    value="{{ $pendaftarItem->email_ibu }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Tutup
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal edit end --}}
                                    {{-- modal hapus start --}}
                                    <div class="modal fade" id="hapusPendaftar{{ $pendaftarItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/pendaftar/delete/{{ $pendaftarItem->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Anda yakin ingin menghapus data ini?</h4>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Tutup
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal hapus end --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                </div>
                <!-- / Content -->

                @include('dashboard.partials.footer')

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>@endsection