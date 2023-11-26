@extends('layouts.master-layouts')
@section('title')
Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-6.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_produk_jasa" class="col-md-2 col-form-label">Nama Produk/Jasa</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_produk_jasa" id="nama_produk_jasa">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="deskripsi_produk_jasa" class="col-md-2 col-form-label">Deskripsi Produk/Jasa</label></label>
                        <div class="col-md-10">
                            <textarea name="deskripsi_produk_jasa" id="deskripsi_produk_jasa" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bukti" class="col-md-2 col-form-label">Bukti</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="bukti" id="bukti">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tahun" id="tahun">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-6.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection