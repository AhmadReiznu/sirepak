@extends('layouts.master-layouts')
@section('title')
Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-6-b.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tema_penelitian_sesuai_roadmap" class="col-md-2 col-form-label">Tema Penelitian Sesuai Roadmap</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="tema_penelitian_sesuai_roadmap" id="tema_penelitian_sesuai_roadmap">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_mahasiswa" class="col-md-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_mahasiswa" id="nama_mahasiswa">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="judul_tesis" class="col-md-2 col-form-label">Judul Tesis</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="judul_tesis" id="judul_tesis">
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
                        <a href="{{ route('tabel-6-b.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection