@extends('layouts.master-layouts')
@section('title')
Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-6.update', $tabel_3_b_6->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_b_6->nama_dosen }}" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="nama_produk_jasa" class="col-md-2 col-form-label">Nama Produk/Jasa</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_b_6->nama_produk_jasa }}" name="nama_produk_jasa" id="nama_produk_jasa">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="deskripsi_produk_jasa" class="col-md-2 col-form-label">Deskripsi Produk/Jasa</label></label>
                        <div class="col-md-10">
                            <textarea name="deskripsi_produk_jasa" id="deskripsi_produk_jasa" class="form-control" cols="30" rows="10">{{ $tabel_3_b_6->deskripsi_produk_jasa }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bukti" class="col-md-2 col-form-label">Bukti</label></label>
                        <div class="col-md-10">
                            <p>File yang sudah diunggah : </p><span>{{ asset('dokumen/'.$tabel_3_b_6->bukti) }}</span>
                            <input class="form-control" type="file" name="bukti" id="bukti">
                            <input type="hidden" name="current_document" value="{{ $tabel_3_b_6->bukti }}" id="bukti">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_6->tahun }}" name="tahun" id="tahun">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
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