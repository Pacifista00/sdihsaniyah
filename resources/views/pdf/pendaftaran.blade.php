<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PENDAFTARAN PESERTA DIDIK BARU</title>
    <style>
        /* Define F4 paper size in landscape mode for print */
        /* @page {
            size: F4 portrait;
            margin: 0;
        } */

        /* Basic body styling for web display */
        /* body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 20mm;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        } */

        /* The main container for the form, mimicking F4 paper dimensions */
        .container {
            width: 210mm;
            /* A4 width */
            height: 330mm;
            /* F4 height */
            background-color: white;
            padding: 5mm 12mm 5mm 12mm;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            position: relative;
            box-sizing: border-box;
        }

        /* Styling for the header section */
        .header {
            text-align: center;
            line-height: 1;
            margin-bottom: 10px;
            position: relative;

        }

        .line {
            border-bottom: 2px solid black;
            padding: 1mm 0;
        }

        .header .logo {
            width: 60px;
            height: auto;
            position: absolute;
            left: 0;
        }

        .header .title {
            font-weight: bold;
            font-size: 11pt;
        }

        .header .subtitle {
            font-size: 24pt;
            padding-bottom: 0.4mm;
            font-weight: 500;
        }

        .header .address {
            font-size: 10pt;
            margin-top: .5mm;
        }

        .header .form-title {
            font-size: 12pt;
            margin-top: .5mm;
            font-weight: bold;
        }

        /* Styling for the registration number */
        .reg-no {
            position: absolute;
            right: 0;
            top: 0;
            border: 2px solid black;
            height: 40px;
            padding: 1mm;
        }

        /* Styling for form sections (e.g., A. KETERANGAN ANAK) */
        .section {
            margin-top: 15px;
        }

        .section-title {
            font-size: 11pt;
            font-weight: bold;
            margin-bottom: 3px;
        }

        /* General form row layout */
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 0;
            font-size: 11pt;
        }

        .form-row .label {
            flex-shrink: 0;
            width: 240px;
            /* Adjust label width as needed */
            margin-right: 5px;
        }

        /* Underline for input fields */
        .form-row .underline {
            flex-grow: 1;
            border-bottom: 1px solid black;
            height: 18px;
        }

        .form-row .multi-underline {
            flex-grow: 1;
            min-height: 18px;
            border-bottom: 1px solid black;
            display: flex;
            align-items: flex-end;
            word-wrap: break-word;
            white-space: normal;
            /* biar bisa turun ke bawah */
        }


        .form-row .small-underline {
            width: 120px;
            border-bottom: 1px solid black;
            height: 18px;
        }

        /* Styling for the signature area */
        .signature {
            text-align: center;
            font-size: 11pt;
            line-height: 1.5;
            position: absolute;
            right: 30px;
        }

        .signature .name-line {
            display: inline-block;
            margin-top: 50px;
        }

        /* Print-specific styles to ensure a clean printout */
        @media print {
            body {
                background: none;
                padding: 0;
                margin: 0;
            }

            .container {
                box-shadow: none;
                margin: 0;
                padding: 20mm;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <!-- Note: The logo URL is a placeholder. Replace with your actual logo. -->
            <img src="https://placehold.co/60x60/000000/FFFFFF?text=Logo" alt="Ihsaniyah Logo" class="logo">
            <div class="title">YAYASAN PERGURUAN IHSANIYAH</div>
            <div class="title">IHSANIYAH CHARACTER SCHOOL (ICS)</div>
            <div class="subtitle">SD IHSANIYAH 1 KOTA TEGAL</div>
            <div class="title">KAMPUS AS-SALAM</div>
            <div class="line"></div>
            <div class="address">Alamat: Jln.Nakula No.41 Telp. (0283) 341942 Tegal Web: www.sdihsaniyah1pusakategal.com
            </div>
            <div class="form-title">FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN PELAJARAN 2025/2026</div>
            <div class="reg-no">
                No. Pendaftaran :
            </div>
        </div>



        <!-- A. KETERANGAN ANAK -->
        <div class="section">
            <div class="section-title">A. KETERANGAN ANAK</div>
            <div class="form-row">
                <span class="label">1. Nama lengkap</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">2. Nama panggilan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">3. NIK</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">4. NISN</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">5. Jenis kelamin</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">6. Tempat, tanggal lahir</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">7. Agama</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">8. Anak nomor ke</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">9. Jumlah saudara</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">10. Bahasa sehari-hari</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">11. Berat /tinggi badan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">12. Penyakit yang pernah diderita</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">13. Hoby/bakat yang menonjol</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">14. Bertempat tinggal pada</span>
                <span class="underline"></span>
            </div>
        </div>

        <!-- B. AYAH -->
        <div class="section">
            <div class="section-title">B. AYAH</div>
            <div class="form-row">
                <span class="label">1. Nama lengkap</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">2. Tempat, tanggal lahir (umur)</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">3. NIK</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">4. Pendidikan tertinggi</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">5. Pekerjaan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">6. Penghasilan/ bulan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">7. Alamat</span>
                <span class="multi-underline"></span>
            </div>
            <div class="form-row">
                <span class="label">8. No. Telp/Hp.</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">9. Email</span>
                <span class="underline"></span>
            </div>
        </div>

        <!-- C. IBU -->
        <div class="section">
            <div class="section-title">C. IBU</div>
            <div class="form-row">
                <span class="label">1. Nama lengkap</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">2. Tempat, tanggal lahir (umur)</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">3. NIK</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">4. Pendidikan tertinggi</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">5. Pekerjaan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">6. Penghasilan /bulan</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">7. Alamat</span>
                <span class="multi-underline"></span>
            </div>
            <div class="form-row">
                <span class="label">8. No.Telp/Hp.</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">9. Email</span>
                <span class="underline"></span>
            </div>
        </div>

        <!-- D. ASAL MULA PENDIDIKAN -->
        <div class="section">
            <div class="section-title">D. ASAL MULA PENDIDIKAN</div>
            <div class="form-row">
                <span class="label">1. Jenis Pendidikan</span>
                <span class="underline" style="width: 150px;"></span>
                <span>: TK/KB/PAUD/RA/TPA/SPS</span>
            </div>
            <div class="form-row">
                <span class="label">2. Nama Sekolah Asal</span>
                <span class="underline"></span>
            </div>
            <div class="form-row">
                <span class="label">3. Alamat Sekolah Asal</span>
                <span class="multi-underline"></span>
            </div>
            <div class="form-row">
                <span class="label" style="width: auto;">Kelurahan</span>
                <span class="small-underline"></span>
                <span class="label" style="width: auto; margin-left: 20px;">Kecamatan</span>
                <span class="small-underline"></span>
                <span class="label" style="width: auto; margin-left: 20px;">Kota/Kab:</span>
                <span class="small-underline"></span>
            </div>
        </div>

        <!-- Declaration and Signature -->
        <p style="font-size: 11pt; margin-top: 20px;">
            Demikian formulir ini saya isi sesuai dengan dokumen resmi (Akta Kelahiran dan Kartu Keluarga) dan
            bertanggungjawab secara hukum terhadap kebenaran data yang tercantum.
        </p>

        <div class="signature">
            <div class="date">Tegal, ............................................ 20......</div>
            <div>Orang Tua / Wali</div>
            <div class="name-line">(...........................................................)</div>
        </div>
    </div>
</body>

</html>