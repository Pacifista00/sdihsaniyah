<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SD Ihsaniyah 1 Kota Tegal</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Devforlife.id, Adam Samudera">
  <link rel="icon" type="image/png" href="{{ asset('images/logosd.png') }}">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  {{--
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  {{-- aos --}}
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

</head>

<body class="index-page my-text-dark">
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (session('success'))
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 2000
        });
        });
  </script>
  @endif

  @if (session('error'))
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
          icon: 'error',
          title: 'Gagal',
          text: '{{ session('error') }}',
          showConfirmButton: true
        });
        });
  </script>
  @endif

  @if ($errors->any())
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
          icon: 'error',
          title: 'Validasi Gagal',
          html: `{!! implode('<br>', $errors->all()) !!}`,
          showConfirmButton: true
        });
        });
  </script>
  @endif
  <script>
    document.querySelectorAll('.crop-text-kegiatan').forEach(el => {
            const maxChars = 38; // batas karakter
            const text = el.textContent.trim();
            if (text.length > maxChars) {
                el.textContent = text.slice(0, maxChars) + '...';
            }
        });
    document.querySelectorAll('.crop-text-kegiatan-main').forEach(el => {
            const maxChars = 120; // batas karakter
            const text = el.textContent.trim();
            if (text.length > maxChars) {
                el.textContent = text.slice(0, maxChars) + '...';
            }
        });
    document.querySelectorAll('.crop-text-kegiatan-title').forEach(el => {
            const maxChars = 55; // batas karakter
            const text = el.textContent.trim();
            if (text.length > maxChars) {
                el.textContent = text.slice(0, maxChars) + '...';
            }
        });
  </script>

  {{-- aos --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: false,
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  {{-- <script src="{{ asset('vendor/aos/aos.js') }}"></script> --}}
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>