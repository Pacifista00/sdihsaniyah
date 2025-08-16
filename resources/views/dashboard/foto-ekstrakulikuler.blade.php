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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <h5 class="card-header">Default</h5>
                                <div class="card-body">
                                    <form
                                        action="/dashboard/ekstrakulikuler/update-foto/{{ $fotoEkstrakulikulers[0]->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <img src="{{ asset( 'storage/' . $fotoEkstrakulikulers[0]->foto ) }}" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" class="mb-3">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto 1</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                aria-describedby="defaultFormControlHelp">
                                        </div>
                                        <button type="submit" class="btn btn-success rounded-pill py-2">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <h5 class="card-header">Default</h5>
                                <div class="card-body">
                                    <form
                                        action="/dashboard/ekstrakulikuler/update-foto/{{ $fotoEkstrakulikulers[1]->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <img src="{{ asset( 'storage/' . $fotoEkstrakulikulers[1]->foto ) }}" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" class="mb-3">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto 1</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                aria-describedby="defaultFormControlHelp">
                                        </div>
                                        <button type="submit" class="btn btn-success rounded-pill py-2">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <h5 class="card-header">Default</h5>
                                <div class="card-body">
                                    <form
                                        action="/dashboard/ekstrakulikuler/update-foto/{{ $fotoEkstrakulikulers[2]->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <img src="{{ asset( 'storage/' . $fotoEkstrakulikulers[2]->foto ) }}" alt=""
                                            style="width: 100px; height: 100px; object-fit: cover;" class="mb-3">
                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto 1</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                aria-describedby="defaultFormControlHelp">
                                        </div>
                                        <button type="submit" class="btn btn-success rounded-pill py-2">Simpan</button>
                                    </form>
                                </div>
                            </div>
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