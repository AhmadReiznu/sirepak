@extends('layouts.master-layouts')
@section('title')
Kepuasan Pengguna Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kepuasan Pengguna Lulusan @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-ref-8-e-2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Kepuasan Pengguna Lulusan</h4>
                    
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tahun_lulus" id="tahun_lulus">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_lulusan" class="col-md-2 col-form-label">Jumlah Lulusan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_tanggapan_kepuasan_pengguna_yang_terlacak" class="col-md-2 col-form-label">Jumlah Tanggapan Kepuasan Pengguna yang Terlacak</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_tanggapan_kepuasan_pengguna_yang_terlacak" id="jumlah_tanggapan_kepuasan_pengguna_yang_terlacak">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-ref-8-e-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection