@extends('layouts.master-layouts')
@section('title')
Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-5-b.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</h4>
                    <div class="mb-3 row">
                        <label for="judul_penelitian_pkm" class="col-md-2 col-form-label">Judul Penelitian/PkM</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="judul_penelitian_pkm" id="judul_penelitian_pkm">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="mata_kuliah" class="col-md-2 col-form-label">Mata Kuliah</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="mata_kuliah" id="mata_kuliah">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bentuk_integrasi" class="col-md-2 col-form-label">Bentuk Integrasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="bentuk_integrasi" id="bentuk_integrasi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="tahun" id="tahun">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-5-b.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection