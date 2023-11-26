@extends('layouts.master-layouts')
@section('title')
Luaran Penelitian/PkM Lainnya oleh DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Bagian-4 Buku Ber-ISBN, Book Chapter @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-7-4.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Bagian-4 Buku Ber-ISBN, Book Chapter</h4>
                    <div class="mb-3 row">
                        <label for="luaran_penelitian_dan_pkm" class="col-md-2 col-form-label">Luaran Penelitian dan PkM</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="luaran_penelitian_dan_pkm" id="luaran_penelitian_dan_pkm">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="tahun" id="tahun">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label></label>
                        <div class="col-md-10">
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-7-4.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection