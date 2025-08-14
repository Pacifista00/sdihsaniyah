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
                                data-bs-target="#tambahJumbotron">Tambah</button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambahJumbotron" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/dashboard/jumbotron/insert') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto" class="form-label">Foto</label>
                                                        <input type="file" id="foto" class="form-control" name="foto" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" id="judul" class="form-control"
                                                            placeholder="Masukkan judul" name="judul" />
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
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($jumbotrons as $jumbotronItem)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $jumbotronItem->foto) }}"
                                                class="img-table shadow-md" alt="">
                                        </td>
                                        <td>{{ $jumbotronItem->judul }}</td>
                                        <td>{{ $jumbotronItem->deskripsi }}</td>

                                        {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                        <td class="mx-0">
                                            <div class="mb-1">
                                                <button class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#editJumbotron{{ $jumbotronItem->id }}">Edit</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#hapusJumbotron{{ $jumbotronItem->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal edit start --}}
                                    <div class="modal fade" id="editJumbotron{{ $jumbotronItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/jumbotron/update/{{ $jumbotronItem->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto" class="form-label">Foto</label>
                                                                <input type="file" id="foto" class="form-control"
                                                                    name="foto" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" id="judul" class="form-control"
                                                                    placeholder="Masukkan judul" name="judul"
                                                                    value="{{ $jumbotronItem->judul }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="deskripsi"
                                                                    class="form-label">Deskripsi</label>
                                                                <textarea type="text" id="deskripsi"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Deskripsi"
                                                                    name="deskripsi">{{ $jumbotronItem->deskripsi }}</textarea>
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
                                    <div class="modal fade" id="hapusJumbotron{{ $jumbotronItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/jumbotron/delete/{{ $jumbotronItem->id }}"
                                                    method="POST" enctype="multipart/form-data">
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

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank"
                                class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>

                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                target="_blank" class="footer-link me-4">Documentation</a>

                            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                target="_blank" class="footer-link me-4">Support</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>@endsection