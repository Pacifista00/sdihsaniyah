@extends('layouts.main')
@section('content')
    @include('partials.navbar')

    <main class="main">


        <section id="call-to-action" class="call-to-action section my-bg-orange parallax-bg">

            <div class="container">
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="mt-5 pt-lg-5">

                        <h1 class="my-text-heading">SPMB</h1>
                        <h6 class="text-base"><a href="{{ url('/') }}" class="text-white fw-semibold">SD Ihsaniyah 1 Kota
                                Tegal</a><i class="bi bi-chevron-right fs-6 mx-1"></i>SPMB</h6>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="my-5 text-center">
                    <h1 class="fs-1 text-dark mb-3">Data Peserta SPMB</h1>
                </div>
                <div>
                    <form action="/daftar" method="POST" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="nik" class="form-label mb-0 pb-1">NIK</label>
                                    <input type="text" class="form-control rounded-5" id="nik" name="nik" value="{{ old('nik') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label mb-0 pb-1">NISN</label>
                                    <input type="text" class="form-control rounded-5" id="nisn" name="nisn" value="{{ old('nisn') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="namaLengkap" class="form-label mb-0 pb-1">Nama Lengkap</label>
                                    <input type="text" class="form-control rounded-5" id="namaLengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="namaPanggilan" class="form-label mb-0 pb-1">Nama panggilan</label>
                                    <input type="text" class="form-control rounded-5" id="namaPanggilan"
                                        name="nama_panggilan" value="{{ old('nama_panggilan') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tempatLahir" class="form-label mb-0 pb-1">Tempat Lahir</label>
                                    <input type="text" class="form-control rounded-5" id="tempatLahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggalLahir" class="form-label mb-0 pb-1">Tanggal Lahir</label>
                                    <input type="date" class="form-control rounded-5" id="tanggalLahir" 
                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="jenisKelamin" class="form-label mb-0 pb-1">Jenis Kelamin</label>
                                    <select class="form-select rounded-5 border-start-0" id="jenisKelamin" 
                                            name="jenis_kelamin" required>
                                        <option disabled {{ old('jenis_kelamin') ? '' : 'selected' }}>Pilih jenis kelamin...</option>
                                        <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="agama" class="form-label mb-0 pb-1">Agama</label>
                                    <select class="form-select rounded-5 border-start-0" id="agama" name="agama" required>
                                        <option disabled {{ old('agama') ? '' : 'selected' }}>Pilih agama...</option>
                                        <option value="islam" {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="kristen" {{ old('agama') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                        <option value="katolik" {{ old('agama') == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                        <option value="hindu" {{ old('agama') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                        <option value="buddha" {{ old('agama') == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                        <option value="konghucu" {{ old('agama') == 'konghucu' ? 'selected' : '' }}>Konghucu</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="anakKe" class="form-label mb-0 pb-1">Anak ke</label>
                                    <input type="number" class="form-control rounded-5" id="anakKe" 
                                        name="anak_ke" value="{{ old('anak_ke') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="jumlahSaudara" class="form-label mb-0 pb-1">Jumlah Saudara</label>
                                    <input type="number" class="form-control rounded-5" id="jumlahSaudara" 
                                        name="jumlah_saudara" value="{{ old('jumlah_saudara') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="bahasa" class="form-label mb-0 pb-1">Bahasa yang digunakan</label>
                                    <input type="text" class="form-control rounded-5" id="bahasa" 
                                        name="bahasa" value="{{ old('bahasa') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="beratBadan" class="form-label mb-0 pb-1">Berat badan (kg)</label>
                                    <input type="number" class="form-control rounded-5" id="beratBadan" 
                                        name="berat" value="{{ old('berat') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tinggiBadan" class="form-label mb-0 pb-1">Tinggi badan (cm)</label>
                                    <input type="number" class="form-control rounded-5" id="tinggiBadan"
                                        name="tinggi" value="{{ old('tinggi') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="riwayatPenyakit" class="form-label mb-0 pb-1">Riwayat Penyakit</label>
                                    <input type="text" class="form-control rounded-5" id="riwayatPenyakit"
                                        name="riwayat_penyakit" value="{{ old('riwayat_penyakit') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="Hobi" class="form-label mb-0 pb-1">Hobi</label>
                                    <input type="text" class="form-control rounded-5" id="Hobi" 
                                        name="hobi" value="{{ old('hobi') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="Bakat" class="form-label mb-0 pb-1">Bakat</label>
                                    <input type="text" class="form-control rounded-5" id="Bakat" 
                                        name="bakat" value="{{ old('bakat') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="Alamat" class="form-label mb-0 pb-1">Alamat Siswa</label>
                                    <textarea class="form-control rounded-5" id="Alamat" 
                                            name="alamat">{{ old('alamat') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="jenisKelas" class="form-label mb-0 pb-1">Jenis Kelas</label>
                                    <select class="form-select rounded-5 border-start-0" id="jenisKelas" name="jenis_kelas" required>
                                        <option disabled {{ old('jenis_kelas') ? '' : 'selected' }}>Pilih jenis kelas...</option>
                                        <option value="intensif" {{ old('jenis_kelas') == 'intensif' ? 'selected' : '' }}>intensif</option>
                                        <option value="bilingual" {{ old('jenis_kelas') == 'bilingual' ? 'selected' : '' }}>bilingual</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="angkatanId" class="form-label mb-0 pb-1">Daftar Angkatan Berapa</label>
                                    <select class="form-select rounded-5 border-start-0 custom-select-hover"
                                            id="angkatanId" name="angkatan_id" required>
                                        <option disabled {{ old('angkatan_id') ? '' : 'selected' }}>Pilih angkatan...</option>
                                        @foreach ($angkatan as $angkatanItem)
                                            <option value="{{ $angkatanItem->id }}" {{ old('angkatan_id') == $angkatanItem->id ? 'selected' : '' }}>
                                                {{ $angkatanItem->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <h4>Asal Mula Pendidikan</h4>
                                <div class="mb-3">
                                    <label for="jenisPendidikan" class="form-label mb-0 pb-1">Jenis Pendidikan</label>
                                    <select class="form-select rounded-5 border-start-0 custom-select-hover"
                                            id="jenisPendidikan" name="asal_pendidikan" required>
                                        <option disabled {{ old('asal_pendidikan') ? '' : 'selected' }}>Pilih jenis pendidikan...</option>
                                        <option value="tk" {{ old('asal_pendidikan') == 'tk' ? 'selected' : '' }}>TK</option>
                                        <option value="kb" {{ old('asal_pendidikan') == 'kb' ? 'selected' : '' }}>KB</option>
                                        <option value="ra" {{ old('asal_pendidikan') == 'ra' ? 'selected' : '' }}>RA</option>
                                        <option value="sps" {{ old('asal_pendidikan') == 'sps' ? 'selected' : '' }}>SPS</option>
                                        <option value="tpa" {{ old('asal_pendidikan') == 'tpa' ? 'selected' : '' }}>TPA</option>
                                        <option value="paud" {{ old('asal_pendidikan') == 'paud' ? 'selected' : '' }}>PAUD</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="namaSekolah" class="form-label mb-0 pb-1">Nama Sekolah</label>
                                    <input type="text" class="form-control rounded-5" id="namaSekolah"
                                        name="nama_sekolah" value="{{ old('nama_sekolah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="alamatSekolah" class="form-label mb-0 pb-1">Alamat Sekolah</label>
                                    <textarea class="form-control rounded-5" id="alamatSekolah" 
                                            name="alamat_sekolah">{{ old('alamat_sekolah') }}</textarea>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="namaAyah" class="form-label mb-0 pb-1">Nama Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="namaAyah" 
                                        name="nama_ayah" value="{{ old('nama_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="nikAyah" class="form-label mb-0 pb-1">NIK Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="nikAyah" 
                                        name="nik_ayah" value="{{ old('nik_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tempatLahirAyah" class="form-label mb-0 pb-1">Tempat Lahir Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="tempatLahirAyah" 
                                        name="tempat_lahir_ayah" value="{{ old('tempat_lahir_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tanggalLahirAyah" class="form-label mb-0 pb-1">Tanggal Lahir Ayah</label>
                                    <input type="date" class="form-control rounded-5" id="tanggalLahirAyah" 
                                        name="tanggal_lahir_ayah" value="{{ old('tanggal_lahir_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="pendidikanAyah" class="form-label mb-0 pb-1">Pendidikan Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="pendidikanAyah" 
                                        name="pendidikan_ayah" value="{{ old('pendidikan_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="pekerjaanAyah" class="form-label mb-0 pb-1">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="pekerjaanAyah" 
                                        name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="penghasilanAyah" class="form-label mb-0 pb-1">Penghasilan Ayah</label>
                                    <input type="number" class="form-control rounded-5" id="penghasilanAyah" 
                                        name="penghasilan_ayah" value="{{ old('penghasilan_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="alamatAyah" class="form-label mb-0 pb-1">Alamat Ayah</label>
                                    <textarea class="form-control rounded-5" id="alamatAyah" 
                                            name="alamat_ayah">{{ old('alamat_ayah') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="noTelpAyah" class="form-label mb-0 pb-1">No Telepon Ayah</label>
                                    <input type="text" class="form-control rounded-5" id="noTelpAyah" 
                                        name="no_telepon_ayah" value="{{ old('no_telepon_ayah') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="emailAyah" class="form-label mb-0 pb-1">Email Ayah</label>
                                    <input type="email" class="form-control rounded-5" id="emailAyah" 
                                        name="email_ayah" value="{{ old('email_ayah') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="namaIbu" class="form-label mb-0 pb-1">Nama Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="namaIbu" name="nama_ibu"
                                        value="{{ old('nama_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="nikIbu" class="form-label mb-0 pb-1">NIK Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="nikIbu" name="nik_ibu"
                                        value="{{ old('nik_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tempatLahirIbu" class="form-label mb-0 pb-1">Tempat Lahir Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="tempatLahirIbu" name="tempat_lahir_ibu"
                                        value="{{ old('tempat_lahir_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="tanggalLahirIbu" class="form-label mb-0 pb-1">Tanggal Lahir Ibu</label>
                                    <input type="date" class="form-control rounded-5" id="tanggalLahirIbu" name="tanggal_lahir_ibu"
                                        value="{{ old('tanggal_lahir_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="pendidikanIbu" class="form-label mb-0 pb-1">Pendidikan Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="pendidikanIbu" name="pendidikan_ibu"
                                        value="{{ old('pendidikan_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="pekerjaanIbu" class="form-label mb-0 pb-1">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="pekerjaanIbu" name="pekerjaan_ibu"
                                        value="{{ old('pekerjaan_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="penghasilanIbu" class="form-label mb-0 pb-1">Penghasilan Ibu</label>
                                    <input type="number" class="form-control rounded-5" id="penghasilanIbu" name="penghasilan_ibu"
                                        value="{{ old('penghasilan_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="alamatIbu" class="form-label mb-0 pb-1">Alamat Ibu</label>
                                    <textarea class="form-control rounded-5" id="alamatIbu" name="alamat_ibu">{{ old('alamat_ibu') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="noTelpIbu" class="form-label mb-0 pb-1">No Telepon Ibu</label>
                                    <input type="text" class="form-control rounded-5" id="noTelpIbu" name="no_telepon_ibu"
                                        value="{{ old('no_telepon_ibu') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="emailIbu" class="form-label mb-0 pb-1">Email Ibu</label>
                                    <input type="email" class="form-control rounded-5" id="emailIbu" name="email_ibu"
                                        value="{{ old('email_ibu') }}">
                                </div>
                            </div>
                        </div>
                        
                        <h5>Berkas Tambahan</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="kk" class="form-label mb-0 pb-1">Upload KK</label>
                                    <input type="file" class="form-control rounded-5" id="kk" name="berkas_kk">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="akta" class="form-label mb-0 pb-1">Upload Akta</label>
                                    <input type="file" class="form-control rounded-5" id="akta" name="berkas_akta">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="foto" class="form-label mb-0 pb-1">Upload Pas Foto</label>
                                    <input type="file" class="form-control rounded-5" id="foto" name="foto">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn rounded-pill btn-green my-3 px-5">Daftar</button>
                        </div>
                    </form>
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
