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
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-0">Table Basic</h5>
                                    </div>
                                    <button class="btn btn-success rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#tambahKurikulum">Tambah</button>
                                    <!-- Modal tambah kurikulum start -->
                                    <div class="modal fade" id="tambahKurikulum" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/kurikulum/insert" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" id="judul" class="form-control"
                                                                    placeholder="Masukkan judul" name="judul" />
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
                                    {{-- modal tambah kurikulum end --}}
                                </div>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($kurikulums as $kurikulumItem)
                                            <tr>
                                                <td>{{ $kurikulumItem->judul }}</td>

                                                {{-- <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                --}}
                                                <td class="mx-0">
                                                    <div class="mb-1">
                                                        <button
                                                            class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                            style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                            data-bs-target="#editKurikulum{{ $kurikulumItem->id }}">Edit</button>
                                                    </div>
                                                    <div class="mb-1">
                                                        <button
                                                            class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                            style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                            data-bs-target="#hapusKurikulum{{ $kurikulumItem->id }}">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- modal edit start --}}
                                            <div class="modal fade" id="editKurikulum{{ $kurikulumItem->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="/dashboard/kurikulum/update/{{ $kurikulumItem->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label for="judul"
                                                                            class="form-label">Judul</label>
                                                                        <input type="text" id="judul"
                                                                            class="form-control"
                                                                            placeholder="Masukkan judul" name="judul"
                                                                            value="{{ $kurikulumItem->judul }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    Tutup
                                                                </button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- modal edit end --}}
                                            {{-- modal hapus start --}}
                                            <div class="modal fade" id="hapusKurikulum{{ $kurikulumItem->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="/dashboard/kurikulum/delete/{{ $kurikulumItem->id }}"
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
                                                                <button type="submit"
                                                                    class="btn btn-danger">Hapus</button>
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
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-0">Table Basic</h5>
                                    </div>
                                    <button class="btn btn-success rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#tambahProgramUnggulan">Tambah</button>
                                    <!-- Modal tambah program unggulan start -->
                                    <div class="modal fade" id="tambahProgramUnggulan" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/unggulan/insert" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" id="judul" class="form-control"
                                                                    placeholder="Masukkan judul" name="judul" />
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
                                    {{-- modal tambah program unggulan end --}}
                                </div>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($unggulans as $unggulanItem)
                                            <tr>
                                                <td>{{ $unggulanItem->judul }}</td>

                                                {{-- <td><span class="badge bg-label-primary me-1">Active</span></td>
                                                --}}
                                                <td class="mx-0">
                                                    <div class="mb-1">
                                                        <button
                                                            class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                            style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                            data-bs-target="#editUnggulan{{ $unggulanItem->id }}">Edit</button>
                                                    </div>
                                                    <div class="mb-1">
                                                        <button
                                                            class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                            style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                            data-bs-target="#hapusUnggulan{{ $unggulanItem->id }}">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- modal edit start --}}
                                            <div class="modal fade" id="editUnggulan{{ $unggulanItem->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="/dashboard/unggulan/update/{{ $unggulanItem->id }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label for="judul"
                                                                            class="form-label">Judul</label>
                                                                        <input type="text" id="judul"
                                                                            class="form-control"
                                                                            placeholder="Masukkan judul" name="judul"
                                                                            value="{{ $unggulanItem->judul }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    Tutup
                                                                </button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- modal edit end --}}
                                            {{-- modal hapus start --}}
                                            <div class="modal fade" id="hapusUnggulan{{ $unggulanItem->id }}"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="/dashboard/unggulan/delete/{{ $unggulanItem->id }}"
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
                                                                <button type="submit"
                                                                    class="btn btn-danger">Hapus</button>
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