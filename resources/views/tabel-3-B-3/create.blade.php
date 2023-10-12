@extends('layouts.master-layouts')
@section('title')
PkM DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') PkM DTPS @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-3.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data PkM DTPS</h4>
                    <div class="mb-3 row">
                        <label for="sumber_pembiayaan" class="col-md-2 col-form-label">Sumber Pembiayaan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts_2" class="col-md-2 col-form-label">TS-2</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_pkm_ts_2" id="jumlah_judul_pkm_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts_1" class="col-md-2 col-form-label">TS-1</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_pkm_ts_1" id="jumlah_judul_pkm_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts" class="col-md-2 col-form-label">TS</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_judul_pkm_ts" id="jumlah_judul_pkm_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-3.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection