<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PENDAFTARAN PPDB</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            position: relative;
        }
        .header {
            text-align: center;
            margin-bottom: 3px;
            position: relative;
        }
        .header h3 {
            margin: 0;
            font-size: 14px;
            color: #44a357;
        }
        .header h1 {
            margin: 0;
            color: #44a357;
        }
        .header p {
            margin: 0;
            font-size: 10px;
        }
        .header .logo {
            position: absolute;
            left: 0;
            top: 0;
            width: 74px;
            margin-right: 15px;
        }
        .header .no-pendaftaran {
            position: absolute;
            right: 0;
            height: 30px;
            border: 1px solid black;
            padding: 5px 10px;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .info-header {
            text-align: center;
            font-weight: bold;
        }
        .info-header .p1{
            margin: 1px 0;
            font-weight: 400;
            font-size: 10px;
        }
        .info-header .p2{
            font-weight: 400;
            font-size: 14px;
            margin: 0;
        }
        .form-section {
            margin-top: 8px;
        }
        .form-section h4 {
            margin: 0 0 5px 0;
            font-size: 13px;
            font-weight: bold;
        }
        .form-table {
            width: 100%;
            border-collapse: collapse;
        }
        .form-table tr {
            line-height: 10px;
        }
        .form-table td {
            vertical-align: top;
            padding: 2px 0;
        }
        .form-table .number {
            width: 20px; /* Optional: adjust width for number column */
            text-align: left;
            padding-right: 5px;
        }
        .form-table .label {
            width: 230px; /* Adjust width to make space for the number */
        }
        .form-table .colon {
            width: 10px;
        }
        .text-line {
            display: inline-block;
            width: 100%;
            border-bottom: 1px dotted #000;
        }
        .signature-section {
            margin-top: 8px;
            text-align: center;
            position: absolute;
            right: 8mm;
        }
        .signature-section p {
            margin: 0;
            padding: 0;
        }
        hr{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <img src="{{ public_path('images/logosd.png') }}" alt="Logo" class="logo">
        <div class="no-pendaftaran">
            No. Pendaftaran :
        </div>
        <h3>YAYASAN PERGURUAN IHSANIYAH</h3>
        <h3>IHSANIYAH CHARACTER SCHOOL (ICS)</h3>
        <h1>SD IHSANIYAH 1 KOTA TEGAL</h1>
        <h3>KAMPUS AS-SALAM</h3>
    </div>
    <hr>
    <div class="info-header">
        <p class="p1">Alamat : Jln.Nakula No.11 Tegal - (0283) 341942 | Web : www.sdisahsaniyah1pusakategal.com</p>
        <p class="p2"><strong>FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN PELAJARAN 2026/2027</strong></p>
    </div>

    <div class="form-section">
        <h4>A. KETERANGAN ANAK</h4>
        <table class="form-table">
            <tr>
                <td class="number">1.</td>
                <td class="label">Nama Lengkap</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nama_lengkap }}</span></td>
            </tr>
            <tr>
                <td class="number">2.</td>
                <td class="label">Nama Panggilan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nama_panggilan }}</span></td>
            </tr>
            <tr>
                <td class="number">3.</td>
                <td class="label">NIK</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nik }}</span></td>
            </tr>
            <tr>
                <td class="number">4.</td>
                <td class="label">NISN</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nisn }}</span></td>
            </tr>
            <tr>
                <td class="number">5.</td>
                <td class="label">Jenis Kelamin</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->jenis_kelamin }}</span></td>
            </tr>
            <tr>
                <td class="number">6.</td>
                <td class="label">Tempat, tanggal lahir</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->tempat_lahir }}, {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
</span></td>
            </tr>
            <tr>
                <td class="number">7.</td>
                <td class="label">Agama</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->agama }}</span></td>
            </tr>
            <tr>
                <td class="number">8.</td>
                <td class="label">Anak nomor ke</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->anak_ke }}</span></td>
            </tr>
            <tr>
                <td class="number">9.</td>
                <td class="label">Jumlah Saudara</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->jumlah_saudara }}</span></td>
            </tr>
            <tr>
                <td class="number">10.</td>
                <td class="label">Bahasa sehari-hari</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->bahasa }}</span></td>
            </tr>
            <tr>
                <td class="number">11.</td>
                <td class="label">Berat /tinggi badan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->berat }} kg / {{ $pendaftar->tinggi }} cm</span></td>
            </tr>
            <tr>
                <td class="number">12.</td>
                <td class="label">Penyakit yang pernah diderita</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->riwayat_penyakit }}</span></td>
            </tr>
            <tr>
                <td class="number">13.</td>
                <td class="label">Hobi / Bakat yang menonjol</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->hobi }}</span></td>
            </tr>
            <tr>
                <td class="number">14.</td>
                <td class="label">Bertempat tinggal pada</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->alamat }}</span></td>
            </tr>
        </table>
    </div>
    
    <div class="form-section">
        <h4>B. AYAH</h4>
        <table class="form-table">
            <tr>
                <td class="number">1.</td>
                <td class="label">Nama lengkap</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nama_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">2.</td>
                <td class="label">Tempat, tanggal lahir</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->tempat_lahir_ayah }}, {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir_ayah)->locale('id')->translatedFormat('d F Y') }}</span></td>
            </tr>
            <tr>
                <td class="number">3.</td>
                <td class="label">NIK</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nik_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">4.</td>
                <td class="label">Pendidikan tertinggi</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->pendidikan_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">5.</td>
                <td class="label">Pekerjaan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->pekerjaan_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">6.</td>
                <td class="label">Penghasilan/bulan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->penghasilan_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">7.</td>
                <td class="label">Alamat</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->alamat_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">8.</td>
                <td class="label">No. Telp/Hp.</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->no_telepon_ayah }}</span></td>
            </tr>
            <tr>
                <td class="number">9.</td>
                <td class="label">Email</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->email_ayah }}</span></td>
            </tr>
        </table>
    </div>

    <div class="form-section">
        <h4>C. IBU</h4>
        <table class="form-table">
            <tr>
                <td class="number">1.</td>
                <td class="label">Nama lengkap</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nama_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">2.</td>
                <td class="label">Tempat, tanggal lahir (umur)</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->tempat_lahir_ibu }}, {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}</span></td>
            </tr>
            <tr>
                <td class="number">3.</td>
                <td class="label">NIK</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nik_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">4.</td>
                <td class="label">Pendidikan tertinggi</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->pendidikan_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">5.</td>
                <td class="label">Pekerjaan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->pekerjaan_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">6.</td>
                <td class="label">Penghasilan/bulan</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->penghasilan_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">7.</td>
                <td class="label">Alamat</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->alamat_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">8.</td>
                <td class="label">No. Telp/Hp.</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->no_telepon_ibu }}</span></td>
            </tr>
            <tr>
                <td class="number">9.</td>
                <td class="label">Email</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->email_ibu }}</span></td>
            </tr>
        </table>
    </div>

    <div class="form-section">
        <h4>D. ASAL MULA PENDIDIKAN</h4>
        <table class="form-table">
            <tr>
                <td class="number">1.</td>
                <td class="label">Jenis Pendidikan</td>
                <td class="colon">:</td>
                <td>{{ $pendaftar->asal_pendidikan }}</td>
            </tr>
            <tr>
                <td class="number">2.</td>
                <td class="label">Nama Sekolah Asal</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->nama_sekolah }}</span></td>
            </tr>
            <tr>
                <td class="number">3.</td>
                <td class="label">Alamat Sekolah Asal</td>
                <td class="colon">:</td>
                <td><span class="value">{{ $pendaftar->alamat_sekolah }}</span></td>
            </tr>
        </table>
    </div>

    <div class="disclaimer-text" style="margin-top: 7px;">
        <p style="margin : 0 ;">Demikian formulir ini saya isi sesuai dengan dokumen resmi (Akta Kelahiran dan Kartu Keluarga) dan bertanggungjawab secara hukum terhadap kebenaran data yang tercantum.</p>
    </div>

    <div class="signature-section">
        <p>Tegal, ............................................20.....</p>
        <p>Orang Tua / Wali</p>
        <p style="margin-top: 50px;">(..............................................)</p>
    </div>
</div>

</body>
</html>