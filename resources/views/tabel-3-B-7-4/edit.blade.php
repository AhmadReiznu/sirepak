@extends('layouts.master-layouts')
@section('title')
Luaran Penelitian/PkM Lainnya oleh DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Bagian-4 Buku Ber-ISBN, Book Chapter @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-7-4.update', $tabel_3_b_7_4->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Bagian-4 Buku Ber-ISBN, Book Chapter</h4>
                    <div class="mb-3 row">
                        <label for="luaran_penelitian_dan_pkm" class="col-md-2 col-form-label">Luaran Penelitian dan PkM</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_b_7_4->luaran_penelitian_dan_pkm }}" name="luaran_penelitian_dan_pkm" id="luaran_penelitian_dan_pkm">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_b_7_4->tahun }}" name="tahun" id="tahun">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label></label>
                        <div class="col-md-10">
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10">{{ $tabel_3_b_7_4->keterangan }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
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