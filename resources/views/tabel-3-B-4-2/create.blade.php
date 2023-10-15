@extends('layouts.master-layouts')
@section('title')
Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-4-2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS</h4>
                    <div class="mb-3 row">
                        <label for="jenis_publikasi" class="col-md-2 col-form-label">Jenis Publikasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="jenis_publikasi" id="jenis_publikasi">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_judul_ts_2" class="col-md-2 col-form-label">TS-2</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_ts_2" id="jumlah_judul_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_ts_1" class="col-md-2 col-form-label">TS-1</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_ts_1" id="jumlah_judul_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_ts" class="col-md-2 col-form-label">TS</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_ts" id="jumlah_judul_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-4-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection