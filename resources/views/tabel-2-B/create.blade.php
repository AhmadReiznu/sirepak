@extends('layouts.master-layouts')
@section('title')
Mahasiswa Asing
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Mahasiswa Asing @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-2-b.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @csrf
                    <div class="card-body">
                        @if(count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        <h4 class="card-title">Tambah Data Mahasiswa Asing</h4>
                        <div class="mb-3 row">
                            <label for="program_studi" class="col-md-2 col-form-label">Program Studi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="program_studi" id="program_studi">
                            </div>
                        </div>

                        <p class="badge bg-info">Jumlah Mahasiswa Aktif</p>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_aktif_ts_2" class="col-md-2 col-form-label">TS-2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_aktif_ts_2" id="jumlah_mahasiswa_aktif_ts_2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_aktif_ts_1" class="col-md-2 col-form-label">TS-1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_aktif_ts_1" id="jumlah_mahasiswa_aktif_ts_1">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_aktif_ts" class="col-md-2 col-form-label">TS</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_aktif_ts" id="jumlah_mahasiswa_aktif_ts">
                            </div>
                        </div>

                        <p class="badge bg-info">Jumlah Mahasiswa Asing Full-time</p>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_penuh_waktu_ts_2" class="col-md-2 col-form-label">TS-2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_penuh_waktu_ts_2" id="jumlah_mahasiswa_asing_penuh_waktu_ts_2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_penuh_waktu_ts_1" class="col-md-2 col-form-label">TS-1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_penuh_waktu_ts_1" id="jumlah_mahasiswa_asing_penuh_waktu_ts_1">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_penuh_waktu_ts" class="col-md-2 col-form-label">TS</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_penuh_waktu_ts" id="jumlah_mahasiswa_asing_penuh_waktu_ts">
                            </div>
                        </div>

                        <p class="badge bg-info">Jumlah Mahasiswa Part-time</p>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_paruh_waktu_ts_2" class="col-md-2 col-form-label">TS-2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_paruh_waktu_ts_2" id="jumlah_mahasiswa_asing_paruh_waktu_ts_2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_paruh_waktu_ts_1" class="col-md-2 col-form-label">TS-1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_paruh_waktu_ts_1" id="jumlah_mahasiswa_asing_paruh_waktu_ts_1">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_mahasiswa_asing_paruh_waktu_ts" class="col-md-2 col-form-label">TS</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="jumlah_mahasiswa_asing_paruh_waktu_ts" id="jumlah_mahasiswa_asing_paruh_waktu_ts">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button class="btn btn-danger">
                            <a href="{{ route('tabel-2-b.index') }}" class="text-white">Batal</a>
                        </button>
                    </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection