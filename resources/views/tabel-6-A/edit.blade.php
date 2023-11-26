@extends('layouts.master-layouts')
@section('title')
Penelitian DTPS yang Melibatkan Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Penelitian DTPS yang Melibatkan Mahasiswa @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-6-a.update', $tabel_6_a->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                    <h4 class="card-title">Ubah Data Penelitian DTPS yang Melibatkan Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_6_a->nama_dosen }}" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tema_penelitian_sesuai_roadmap" class="col-md-2 col-form-label">Tema Penelitian Sesuai Roadmap</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_6_a->tema_penelitian_sesuai_roadmap }}" name="tema_penelitian_sesuai_roadmap" id="tema_penelitian_sesuai_roadmap">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_mahasiswa" class="col-md-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_6_a->nama_mahasiswa }}" name="nama_mahasiswa" id="nama_mahasiswa">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="judul_kegiatan" class="col-md-2 col-form-label">Judul Kegiatan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_6_a->judul_kegiatan }}" name="judul_kegiatan" id="judul_kegiatan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_6_a->tahun }}" name="tahun" id="tahun">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-6-a.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection