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
                                data-bs-target="#tambahkegiatan">Tambah</button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambahkegiatan" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Tambah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/dashboard/kegiatan/insert') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto" class="form-label">Foto Thumbnail</label>
                                                        <input type="file" id="foto" class="form-control" name="foto" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto2" class="form-label">Foto 2
                                                            <small>(Opsional)</small></label>
                                                        <input type="file" id="foto2" class="form-control"
                                                            name="foto2" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto3" class="form-label">Foto 3
                                                            <small>(Opsional)</small></label>
                                                        <input type="file" id="foto3" class="form-control"
                                                            name="foto3" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto4" class="form-label">Foto 4
                                                            <small>(Opsional)</small></label>
                                                        <input type="file" id="foto4" class="form-control"
                                                            name="foto4" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="foto5" class="form-label">Foto 5
                                                            <small>(Opsional)</small></label>
                                                        <input type="file" id="foto5" class="form-control"
                                                            name="foto5" />
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
                                                        <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                                                        <input type="date" id="tanggal" class="form-control"
                                                            placeholder="Masukkan Tanggal" name="tanggal" />
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
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="unggulan" class="form-label">Atur sebagai berita
                                                            unggulan?</label>
                                                        <select id="unggulan" class="form-select" name="unggulan">
                                                            <option value="1">Ya</option>
                                                            <option value="0">Tidak</option>
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
                        <h5 class="card-header">Kegiatan</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Foto 2</th>
                                        <th>Foto 3</th>
                                        <th>Foto 4</th>
                                        <th>Foto 5</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Unggulan</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($kegiatans as $kegiatanItem)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $kegiatanItem->foto) }}"
                                                class="img-table shadow-md" alt="">
                                        </td>
                                        <td>
                                            {!! $kegiatanItem->foto2
                                            ? '<img src="'.asset('storage/'.$kegiatanItem->foto2).'"
                                                class="img-table shadow-md" alt="">'
                                            : '<span class="text-gray-500 italic">Foto kosong</span>' !!}
                                        </td>
                                        <td>
                                            {!! $kegiatanItem->foto3
                                            ? '<img src="'.asset('storage/'.$kegiatanItem->foto3).'"
                                                class="img-table shadow-md" alt="">'
                                            : '<span class="text-gray-500 italic">Foto kosong</span>' !!}
                                        </td>
                                        <td>
                                            {!! $kegiatanItem->foto4
                                            ? '<img src="'.asset('storage/'.$kegiatanItem->foto4).'"
                                                class="img-table shadow-md" alt="">'
                                            : '<span class="text-gray-500 italic">Foto kosong</span>' !!}
                                        </td>
                                        <td>
                                            {!! $kegiatanItem->foto5
                                            ? '<img src="'.asset('storage/'.$kegiatanItem->foto5).'"
                                                class="img-table shadow-md" alt="">'
                                            : '<span class="text-gray-500 italic">Foto kosong</span>' !!}
                                        </td>
                                        <td class="crop-text">{{ $kegiatanItem->judul }}</td>
                                        <td>{{ $kegiatanItem->tanggal }}</td>
                                        <td class="crop-text">{{ $kegiatanItem->deskripsi }}</td>
                                        <td>
                                            {{ $kegiatanItem->unggulan ? 'Ya' : 'Tidak' }}
                                        </td>


                                        {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                        <td class="mx-0">
                                            <div class="mb-1">
                                                <button class="btn btn-success w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#editKegiatan{{ $kegiatanItem->id }}">Edit</button>
                                            </div>
                                            <div class="mb-1">
                                                <button class="btn btn-danger w-100 py-0 py-md-1 px-3 rounded-pill"
                                                    style="font-size: 0.75rem;" data-bs-toggle="modal"
                                                    data-bs-target="#hapusKegiatan{{ $kegiatanItem->id }}">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal edit start --}}
                                    <div class="modal fade" id="editKegiatan{{ $kegiatanItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/kegiatan/update/{{ $kegiatanItem->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto" class="form-label">Foto
                                                                    Thumbnail</label>
                                                                <input type="file" id="foto" class="form-control"
                                                                    name="foto" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto2" class="form-label">Foto 2</label>
                                                                <input type="file" id="foto2" class="form-control"
                                                                    name="foto2" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto3" class="form-label">Foto 3</label>
                                                                <input type="file" id="foto3" class="form-control"
                                                                    name="foto3" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto4" class="form-label">Foto 4</label>
                                                                <input type="file" id="foto4" class="form-control"
                                                                    name="foto4" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="foto5" class="form-label">Foto 5</label>
                                                                <input type="file" id="foto5" class="form-control"
                                                                    name="foto5" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="judul" class="form-label">Judul</label>
                                                                <input type="text" id="judul" class="form-control"
                                                                    placeholder="Masukkan judul" name="judul"
                                                                    value="{{ $kegiatanItem->judul }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="tanggal" class="form-label">Tanggal
                                                                    Kegiatan</label>
                                                                <input type="text" id="tanggal" class="form-control"
                                                                    placeholder="Masukkan tanggal" name="tanggal"
                                                                    value="{{ $kegiatanItem->tanggal }}" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="deskripsi"
                                                                    class="form-label">Deskripsi</label>
                                                                <textarea type="text" id="deskripsi"
                                                                    class="form-control"
                                                                    placeholder="Masukkan Deskripsi"
                                                                    name="deskripsi">{{ $kegiatanItem->deskripsi }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="unggulan"
                                                                    class="form-label">Unggulan</label>
                                                                <select id="unggulan" class="form-select"
                                                                    name="unggulan">
                                                                    <option value="1" {{ (old('unggulan',
                                                                        $kegiatanItem->unggulan) == 1) ? 'selected' : ''
                                                                        }}>Ya</option>
                                                                    <option value="0" {{ (old('unggulan',
                                                                        $kegiatanItem->unggulan) == 0) ? 'selected' : ''
                                                                        }}>Tidak
                                                                    </option>
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
                                    <div class="modal fade" id="hapusKegiatan{{ $kegiatanItem->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/dashboard/kegiatan/delete/{{ $kegiatanItem->id }}"
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