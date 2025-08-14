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
                    <form action="" class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="mb-3">
                                <label for="nik" class="form-label mb-0 pb-1">NIK</label>
                                <input type="text" class="form-control rounded-5" id="nik" name="nik">
                            </div>
                            <div class="mb-3">
                                <label for="nisn" class="form-label mb-0 pb-1">NISN</label>
                                <input type="text" class="form-control rounded-5" id="nisn" name="nisn">
                            </div>
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label mb-0 pb-1">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-5" id="namaLengkap" name="nama_lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="namaPanggilan" class="form-label mb-0 pb-1">Nama panggilan</label>
                                <input type="text" class="form-control rounded-5" id="namaPanggilan"
                                    name="nama_panggilan">
                            </div>
                            <div class="mb-3">
                                <label for="tempatLahir" class="form-label mb-0 pb-1">Tempat Lahir</label>
                                <input type="text" class="form-control rounded-5" id="tempatLahir" name="tempat_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahir" class="form-label mb-0 pb-1">Tanggal Lahir</label>
                                <input type="date" class="form-control rounded-5" id="tanggalLahir" name="tanggal_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="jenisKelamin" class="form-label mb-0 pb-1">Jenis Kelamin</label>
                                <select class="form-select rounded-5 border-start-0" id="jenisKelamin" name="jenis_kelamin"
                                    required>
                                    <option disabled>Pilih jenis kelamin...
                                    </option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label mb-0 pb-1">Agama</label>
                                <select class="form-select rounded-5 border-start-0" id="agama" name="agama" required>
                                    <option disabled>Pilih agama...
                                    </option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="anakKe" class="form-label mb-0 pb-1">Anak ke</label>
                                <input type="number" class="form-control rounded-5" id="anakKe" name="anak_ke">
                            </div>
                            <div class="mb-3">
                                <label for="jumlahSaudara" class="form-label mb-0 pb-1">Jumlah Saudara</label>
                                <input type="number" class="form-control rounded-5" id="jumlahSaudara"
                                    name="jumlah_saudara">
                            </div>
                            <div class="mb-3">
                                <label for="bahasa" class="form-label mb-0 pb-1">Bahasa yang digunakan</label>
                                <input type="text" class="form-control rounded-5" id="bahasa" name="bahasa">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="mb-3">
                                <label for="beratBadan" class="form-label mb-0 pb-1">Berat badan (kg)</label>
                                <input type="number" class="form-control rounded-5" id="beratBadan" name="berat_badan">
                            </div>
                            <div class="mb-3">
                                <label for="tinggiBadan" class="form-label mb-0 pb-1">Tinggi badan (cm)</label>
                                <input type="number" class="form-control rounded-5" id="tinggiBadan"
                                    name="tinggi_badan">
                            </div>
                            <div class="mb-3">
                                <label for="riwayatPenyakit" class="form-label mb-0 pb-1">Riwayat Penyakit</label>
                                <input type="text" class="form-control rounded-5" id="riwayatPenyakit"
                                    name="riwayat_pengakit">
                            </div>
                            <div class="mb-3">
                                <label for="Hobi" class="form-label mb-0 pb-1">Hobi</label>
                                <input type="text" class="form-control rounded-5" id="Hobi" name="hobi">
                            </div>
                            <div class="mb-3">
                                <label for="Bakat" class="form-label mb-0 pb-1">Bakat</label>
                                <input type="text" class="form-control rounded-5" id="Bakat" name="bakat">
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label mb-0 pb-1">Alamat Siswa</label>
                                <textarea type="text" class="form-control rounded-5" id="Alamat" name="alamat"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="jenisKelas" class="form-label mb-0 pb-1">Jenis Kelas</label>
                                <select class="form-select rounded-5 border-start-0" id="jenisKelas" name="jenis_kelas"
                                    required>
                                    <option disabled>Pilih jenis kelas...
                                    </option>
                                    <option>Intensif</option>
                                    <option>Bilingual</option>
                                </select>
                            </div>
                            <h4>Asal Mula Pendidikan</h4>
                            <div class="mb-3">
                                <label for="jenisPendidikan" class="form-label mb-0 pb-1">Jenis Pendidikan</label>
                                <select class="form-select rounded-5 border-start-0 custom-select-hover"
                                    id="jenisPendidikan" name="jenis_pendidikan" required>
                                    <option disabled>Pilih jenis pendidikan...
                                    </option>
                                    <option>TK</option>
                                    <option>KB</option>
                                    <option>RA</option>
                                    <option>SPS</option>
                                    <option>TPA</option>
                                    <option>PAUD</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="namaSekolah" class="form-label mb-0 pb-1">Nama Sekolah</label>
                                <input type="text" class="form-control rounded-5" id="namaSekolah"
                                    name="nama_sekolah">
                            </div>
                            <div class="mb-3">
                                <label for="alamatSekolah" class="form-label mb-0 pb-1">Alamat Sekolah</label>
                                <textarea type="text" class="form-control rounded-5" id="alamatSekolah" name="alamat_sekolah"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="mb-3">
                                <label for="namaAyah" class="form-label mb-0 pb-1">Nama Ayah</label>
                                <input type="text" class="form-control rounded-5" id="namaAyah" name="nama_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="nikAyah" class="form-label mb-0 pb-1">NIK Ayah</label>
                                <input type="text" class="form-control rounded-5" id="nikAyah" name="nik_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="tempatLahirAyah" class="form-label mb-0 pb-1">Tempat Lahir Ayah</label>
                                <input type="text" class="form-control rounded-5" id="tempatLahirAyah"
                                    name="tempat_lahir_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahirAyah" class="form-label mb-0 pb-1">Tanggal Lahir Ayah</label>
                                <input type="date" class="form-control rounded-5" id="tanggalLahirAyah"
                                    name="tanggal_lahir_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikanAyah" class="form-label mb-0 pb-1">Pendidikan Ayah</label>
                                <input type="text" class="form-control rounded-5" id="pendidikanAyah"
                                    name="pendidikan_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaanAyah" class="form-label mb-0 pb-1">Pekerjaan Ayah</label>
                                <input type="text" class="form-control rounded-5" id="pekerjaanAyah"
                                    name="pekerjaan_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="penghasilanAyah" class="form-label mb-0 pb-1">Penghasilan Ayah</label>
                                <input type="text" class="form-control rounded-5" id="penghasilanAyah"
                                    name="penghasilan_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="alamatAyah" class="form-label mb-0 pb-1">Alamat Ayah</label>
                                <input type="text" class="form-control rounded-5" id="alamatAyah" name="alamat_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="noTelpAyah" class="form-label mb-0 pb-1">No Telepon Ayah</label>
                                <input type="text" class="form-control rounded-5" id="noTelpAyah"
                                    name="no_telp_ayah">
                            </div>
                            <div class="mb-3">
                                <label for="emailAyah" class="form-label mb-0 pb-1">Email Ayah</label>
                                <input type="email" class="form-control rounded-5" id="emailAyah" name="email_ayah">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="mb-3">
                                <label for="namaIbu" class="form-label mb-0 pb-1">Nama Ibu</label>
                                <input type="text" class="form-control rounded-5" id="namaIbu" name="nama_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="nikIbu" class="form-label mb-0 pb-1">NIK Ibu</label>
                                <input type="text" class="form-control rounded-5" id="nikIbu" name="nik_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="tempatLahirIbu" class="form-label mb-0 pb-1">Tempat Lahir Ibu</label>
                                <input type="text" class="form-control rounded-5" id="tempatLahirIbu"
                                    name="tempat_lahir_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahirIbu" class="form-label mb-0 pb-1">Tanggal Lahir Ibu</label>
                                <input type="date" class="form-control rounded-5" id="tanggalLahirIbu"
                                    name="tanggal_lahir_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikanIbu" class="form-label mb-0 pb-1">Pendidikan Ibu</label>
                                <input type="text" class="form-control rounded-5" id="pendidikanIbu"
                                    name="pendidikan_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaanIbu" class="form-label mb-0 pb-1">Pekerjaan Ibu</label>
                                <input type="text" class="form-control rounded-5" id="pekerjaanIbu"
                                    name="pekerjaan_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="penghasilanIbu" class="form-label mb-0 pb-1">Penghasilan Ibu</label>
                                <input type="text" class="form-control rounded-5" id="penghasilanIbu"
                                    name="penghasilan_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="alamatIbu" class="form-label mb-0 pb-1">Alamat Ibu</label>
                                <input type="text" class="form-control rounded-5" id="alamatIbu" name="alamat_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="noTelpIbu" class="form-label mb-0 pb-1">No Telepon Ibu</label>
                                <input type="text" class="form-control rounded-5" id="noTelpIbu" name="no_telp_ibu">
                            </div>
                            <div class="mb-3">
                                <label for="emailIbu" class="form-label mb-0 pb-1">Email Ibu</label>
                                <input type="email" class="form-control rounded-5" id="emailIbu" name="email_ibu">
                            </div>
                        </div>
                        <h5>Berkas Tambahan</h5>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="kk" class="form-label mb-0 pb-1">Upload KK</label>
                                <input type="file" class="form-control rounded-5" id="kk" name="kk">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="akta" class="form-label mb-0 pb-1">Upload Akta</label>
                                <input type="file" class="form-control rounded-5" id="akta" name="akta">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="foto" class="form-label mb-0 pb-1">Upload Pas Foto</label>
                                <input type="file" class="form-control rounded-5" id="foto" name="foto">
                            </div>
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
