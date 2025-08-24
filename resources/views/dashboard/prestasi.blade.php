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
                                data-bs-target="#tambahPrestasi">Tambah</button>
                            <!-- Modal Tambah Misi -->
                            <div class="modal fade" id="tambahPrestasi" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/dashboard/prestasi/insert') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" id="judul" class="form-control"
                                                            placeholder="Masukkan judul" name="judul" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="judul" class="form-label">Kategori</label>
                                                        <select id="kategori" name="kategori" class="form-select">
                                                            <option value="">-- Pilih Kategori --</option>
                                                            <option value="internasional">Internasional</option>
                                                            <option value="nasional">Nasional</option>
                                                            <option value="provinsi">Provinsi</option>
                                                            <option value="kota">Kota</option>
                                                        </select>
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
                        <h5 class="card-header">Prestasi</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($prestasis as $prestasiItem)
                                    <tr>

                                        <td>{{ $prestasiItem->judul }}</td>
                                        <td>{{ $prestasiItem->kategori }}</td>

                                        {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                        <td class="mx-0">
                                            <div class="mb-1">
                                                <button class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#editPrestasi{{ $prestasiItem->id }}">Edit</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#hapusPrestasi{{ $prestasiItem->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal edit start --}}
                                    <div class="modal fade" id="editPrestasi{{ $prestasiItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/prestasi/update/{{ $prestasiItem->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" id="judul" class="form-control"
                                                                    placeholder="Masukkan judul" name="judul"
                                                                    value="{{ $prestasiItem->judul }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <select id="kategori" name="kategori"
                                                                    class="form-select">
                                                                    <option value="">-- Pilih Kategori --
                                                                    </option>
                                                                    <option value="">-- Pilih Kategori --</option>
                                                                    <option value="Internasional" {{ $prestasiItem->
                                                                        kategori == 'internasional' ? 'selected' : ''
                                                                        }}>Internasional</option>
                                                                    <option value="Nasional" {{ $prestasiItem->
                                                                        kategori == 'nasional' ? 'selected' : ''
                                                                        }}>Nasional</option>
                                                                    <option value="Provinsi" {{ $prestasiItem->
                                                                        kategori == 'provinsi' ? 'selected' : ''
                                                                        }}>Provinsi</option>
                                                                    <option value="Kota" {{ $prestasiItem->
                                                                        kategori == 'kota' ? 'selected' : ''
                                                                        }}>Kota</option>
                                                                </select>

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
                                    <div class="modal fade" id="hapusPrestasi{{ $prestasiItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/prestasi/delete/{{ $prestasiItem->id }}"
                                                    method="POST">
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
                    <div class="d-flex justify-content-center mt-3">
                        @if ($prestasis->lastPage() > 1)
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{-- Tombol 'First' --}}
                                    <li class="page-item first {{ $prestasis->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $prestasis->url(1) }}"><i
                                                class="tf-icon bx bx-chevrons-left"></i></a>
                                    </li>

                                    {{-- Tombol 'Previous' --}}
                                    <li class="page-item prev {{ $prestasis->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $prestasis->previousPageUrl() }}"><i
                                                class="tf-icon bx bx-chevron-left"></i></a>
                                    </li>

                                    {{-- Tautan Nomor Halaman --}}
                                    @php
                                    $startPage = max(1, $prestasis->currentPage() - 2);
                                    $endPage = min($prestasis->lastPage(), $prestasis->currentPage() + 2);
                                    @endphp

                                    @for ($i = $startPage; $i <= $endPage; $i++) <li
                                        class="page-item {{ ($i == $prestasis->currentPage()) ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $prestasis->url($i) }}">{{ $i }}</a>
                                        </li>
                                        @endfor

                                        {{-- Tombol 'Next' --}}
                                        <li
                                            class="page-item next {{ $prestasis->currentPage() == $prestasis->lastPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $prestasis->nextPageUrl() }}"><i
                                                    class="tf-icon bx bx-chevron-right"></i></a>
                                        </li>

                                        {{-- Tombol 'Last' --}}
                                        <li
                                            class="page-item last {{ $prestasis->currentPage() == $prestasis->lastPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $prestasis->url($prestasis->lastPage()) }}"><i
                                                    class="tf-icon bx bx-chevrons-right"></i></a>
                                        </li>
                                </ul>
                            </nav>
                        </div>
                        @endif
                    </div>
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
</div>
@endsection