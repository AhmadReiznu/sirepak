@extends('layouts.master-layouts')
@section('title')
Karya Ilmiah DTPS yang Disitasi
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Karya Ilmiah DTPS yang Disitasi @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-5.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Karya Ilmiah DTPS yang Disitasi</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="judul_artikel_yang_disitasi" class="col-md-2 col-form-label">Judul Artikel yang Disitasi (Jurnal, Volume, Tahun, Nomor, Halaman)</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="judul_artikel_yang_disitasi" id="judul_artikel_yang_disitasi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_sitasi" class="col-md-2 col-form-label">Jumlah Sitasi</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_sitasi" id="jumlah_sitasi">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-5.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection