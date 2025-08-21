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
                        <h5 class="card-header">Kontak & Sosial Media</h5>
                        <div class="card-body">
                            <form action="/dashboard/kontak/update/{{ $kontak[0]->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="whatsapp" class="form-label">Whatsapp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                        placeholder="Masukkan whatsapp" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->whatsapp }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan email" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->email }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon"
                                        placeholder="Masukkan telepon" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->telepon }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="jam_kerja" class="form-label">Jam Kerja</label>
                                    <input type="text" class="form-control" id="jam_kerja" name="jam_kerja"
                                        placeholder="Masukkan Jam Kerja" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->jam_kerja }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                        placeholder="Masukkan Instagram" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->instagram }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="Masukkan facebook" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->facebook }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube"
                                        placeholder="Masukkan youtube" aria-describedby="defaultFormControlHelp"
                                        value="{{ $kontak[0]->youtube }}" />
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