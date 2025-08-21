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
                            <button class="btn btn-success rounded-pill py-2" data-bs-toggle="modal"
                                data-bs-target="#tambahPPDB">Tambah</button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambahPPDB" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/dashboard/ppdb/insert') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="angkatan" class="form-label">Angkatan</label>
                                                        <input type="text" id="angkatan" class="form-control"
                                                            placeholder="Masukkan angkatan" name="angkatan" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="total_kuota" class="form-label">Total Kuota</label>
                                                        <input type="number" id="total_kuota" class="form-control"
                                                            placeholder="Masukkan Total Kuota" name="total_kuota" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="kuota_tersisa" class="form-label">Kuota
                                                            Tersisa</label>
                                                        <input type="number" id="kuota_tersisa" class="form-control"
                                                            placeholder="Masukkan Kuota Tersisa" name="kuota_tersisa" />
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
                            </div>
                        </div>
                    </div>
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">PPDB</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Angkatan</th>
                                        <th>Kuota Total</th>
                                        <th>Kuota Terisi</th>
                                        <th>Kuota Tersisa</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($ppdbs as $ppdbItem)
                                    <tr>
                                        <td>{{ $ppdbItem->angkatan }}</td>
                                        <td>{{ $ppdbItem->total_kuota }}</td>
                                        <td>{{ $ppdbItem->total_kuota - $ppdbItem->kuota_tersisa }}</td>
                                        <td>{{ $ppdbItem->kuota_tersisa }}</td>

                                        {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                        <td class="mx-0">
                                            <div class="mb-1">
                                                <button class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#editPPDB{{ $ppdbItem->id }}">Edit</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#hapusPPDB{{ $ppdbItem->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal edit start --}}
                                    <div class="modal fade" id="editPPDB{{ $ppdbItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/ppdb/update/{{ $ppdbItem->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="angkatan"
                                                                    class="form-label">Angkatan</label>
                                                                <input type="text" id="angkatan" class="form-control"
                                                                    placeholder="Masukkan angkatan" name="angkatan"
                                                                    value="{{ $ppdbItem->angkatan }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="total_kuota" class="form-label">Total
                                                                    Kuota</label>
                                                                <input type="number" id="total_kuota"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Total Kuota"
                                                                    name="total_kuota"
                                                                    value="{{ $ppdbItem->total_kuota }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="kuota_tersisa"
                                                                    class="form-label">kuota_tersisa</label>
                                                                <input type="number" id="kuota_tersisa"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Kuota Tersisa"
                                                                    name="kuota_tersisa"
                                                                    value="{{ $ppdbItem->kuota_tersisa }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="deskripsi"
                                                                    class="form-label">Deskripsi</label>
                                                                <textarea type="text" id="deskripsi"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Deskripsi"
                                                                    name="deskripsi">{{ $ppdbItem->deskripsi }}</textarea>
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
                                    <div class="modal fade" id="hapusPPDB{{ $ppdbItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/ppdb/delete/{{ $ppdbItem->id }}" method="POST"
                                                    enctype="multipart/form-data">
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