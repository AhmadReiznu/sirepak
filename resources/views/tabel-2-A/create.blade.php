@extends('layouts.master-layouts')
@section('title')
Seleksi Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Seleksi Mahasiswa @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-2-a.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Seleksi Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Tahun Akademik</label>
                        <div class="col-md-10">
                            <select name="tahun_akademik" class="form-select">
                                <option value="TS">TS</option>
                                <option value="TS-1">TS-1</option>
                                <option value="TS-2">TS-2</option>
                                <option value="TS-3">TS-3</option>
                                <option value="TS-4">TS-4</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="daya_tampung" class="col-md-2 col-form-label">Daya Tampung</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="daya_tampung" id="daya_tampung">
                        </div>
                    </div>

                    <p class="badge bg-info">Jumlah Calon Mahasiswa</p>
                    <div class="mb-3 row">
                        <label for="jumlah_calon_mahasiswa_pendaftar" class="col-md-2 col-form-label">Pendaftar</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_calon_mahasiswa_pendaftar" id="jumlah_calon_mahasiswa_pendaftar">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_calon_mahasiswa_lulus_seleksi" class="col-md-2 col-form-label">Lulus Seleksi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_calon_mahasiswa_lulus_seleksi" id="jumlah_calon_mahasiswa_lulus_seleksi">
                        </div>
                    </div>

                    <p class="badge bg-info">Jumlah Mahasiswa Baru</p>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_baru_reguler" class="col-md-2 col-form-label">Reguler</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_baru_reguler" id="jumlah_mahasiswa_baru_reguler">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_baru_transfer" class="col-md-2 col-form-label">Transfer</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_baru_transfer" id="jumlah_mahasiswa_baru_transfer">
                        </div>
                    </div>

                    <p class="badge bg-info">Jumlah Mahasiswa Aktif</p>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_aktif_reguler" class="col-md-2 col-form-label">Reguler</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_aktif_reguler" id="jumlah_mahasiswa_aktif_reguler">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_aktif_transfer" class="col-md-2 col-form-label">Transfer</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_aktif_transfer" id="jumlah_mahasiswa_aktif_transfer">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-2-a.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection