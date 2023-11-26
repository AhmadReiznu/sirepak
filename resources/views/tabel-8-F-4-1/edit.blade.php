@extends('layouts.master-layouts')
@section('title')
Luaran Penelitian/PkM yang Dihasilkan Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Bagian-1 HKI (Paten, Paten Sederhana) @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-f-4-1.update', $tabel_8_f_4_1->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data Luaran Penelitian/PkM yang Dihasilkan Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="luaran_penelitian_dan_pkm" class="col-md-2 col-form-label">Luaran Penelitian dan PkM</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_8_f_4_1->luaran_penelitian_dan_pkm }}" name="luaran_penelitian_dan_pkm" id="luaran_penelitian_dan_pkm">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_f_4_1->tahun }}" name="tahun" id="tahun">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10">{{ $tabel_8_f_4_1->keterangan }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-f-4-1.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection