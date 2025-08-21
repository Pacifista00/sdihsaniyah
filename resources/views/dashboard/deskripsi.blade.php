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
                        <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Dashboard /</span>
                            {{ $active }}
                        </h4>
                    </div>
                    <!-- Basic Bootstrap Table -->
                    <div class="card mb-4">
                        <h5 class="card-header">Deskripsi</h5>
                        <div class="card-body">
                            <form action="/dashboard/deskripsi/update/{{ $deskripsi[0]->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"
                                        aria-describedby="defaultFormControlHelp">{{ $deskripsi[0]->deskripsi }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success rounded-pill py-2">Simpan</button>
                            </form>
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