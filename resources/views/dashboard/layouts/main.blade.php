<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('dashboard-assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('dashboard-assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('dashboard-assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('dashboard-assets/js/config.js') }}"></script>
    <style>
      .swal2-container {
          z-index: 200000 !important;
      }
      .img-table {
          width: 40px;         /* lebar */
          height: 40px;        /* tinggi sama biar kotak */
          object-fit: cover;    /* biar proporsi gambar terjaga */
          border-radius: 8px;   /* opsional, sudut membulat */
          display: block;       /* biar tidak ada jarak bawah aneh */
      }
    </style>
  </head>

  <body>

    @yield('content-dashboard')
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
    
    @if (session('warning'))
      <script>
        document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: '{{ session('warning') }}',
            confirmButtonText: 'OK'
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
        document.querySelectorAll('.crop-text').forEach(td => {
            const maxChars = 40; // batas karakter
            if (td.textContent.length > maxChars) {
                td.textContent = td.textContent.slice(0, maxChars) + '...';
            }
        });
    </script>

        <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dashboard-assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dashboard-assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dashboard-assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('dashboard-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard-assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('dashboard-assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>