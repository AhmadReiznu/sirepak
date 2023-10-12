@extends('layouts.master-layouts')
@section('title')
Prestasi Non-akademik Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Prestasi Non-akademik Mahasiswa @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-b-2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Prestasi Non-akademik Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="nama_kegiatan" class="col-md-2 col-form-label">Nama Kegiatan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="waktu_perolehan" class="col-md-2 col-form-label">Tahun Perolehan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="waktu_perolehan" id="waktu_perolehan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tingkat" class="col-md-2 col-form-label">Tingkat</label>
                        <div class="col-md-10">
                            <select name="tingkat" class="form-select">
                                <option value="lokal">Lokal</option>
                                <option value="nasional">Nasional</option>
                                <option value="internasional">Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prestasi_yang_dicapai" class="col-md-2 col-form-label">Prestasi Yang Dicapai</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="prestasi_yang_dicapai" id="prestasi_yang_dicapai">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-b-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection