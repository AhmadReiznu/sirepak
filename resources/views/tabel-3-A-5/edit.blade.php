@extends('layouts.master-layouts')
@section('title')
Dosen Industri/Praktisi
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dosen Industri/Praktisi @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-a-5.update', $tabel_3_a_5->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data Dosen Industri/Praktisi</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen_industri" class="col-md-2 col-form-label">Nama Dosen Industri</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->nama_dosen_industri }}" name="nama_dosen_industri" id="nama_dosen_industri">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nidk" class="col-md-2 col-form-label">NIDK</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->nidk }}" name="nidk" id="nidk">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="perusahaan" class="col-md-2 col-form-label">Perusahaan/Industri</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->perusahaan }}" name="perusahaan" id="perusahaan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pendidikan_tertinggi" class="col-md-2 col-form-label">Pendidikan Tertinggi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->pendidikan_tertinggi }}" name="pendidikan_tertinggi" id="pendidikan_tertinggi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bidang_keahlian" class="col-md-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->bidang_keahlian }}" name="bidang_keahlian" id="bidang_keahlian">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sertifikat_profesi" class="col-md-2 col-form-label">Sertifikat Profesi/Kompetensi/Industri</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->sertifikat_profesi }}" name="sertifikat_profesi" id="sertifikat_profesi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="mata_kuliah_yang_diampu" class="col-md-2 col-form-label">Mata Kuliah yang Diampu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_5->mata_kuliah_yang_diampu }}" name="mata_kuliah_yang_diampu" id="mata_kuliah_yang_diampu">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sks" class="col-md-2 col-form-label">Bobot Kredit (sks)</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_5->sks }}" name="sks" id="sks">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-a-5.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection