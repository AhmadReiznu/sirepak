@extends('layouts.master-layouts')
@section('title')
Dosen Tidak Tetap
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dosen Tidak Tetap @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-a-4.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Dosen Tidak Tetap</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nidn" class="col-md-2 col-form-label">NIDN/NIDK</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nidn" id="nidn">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pendidikan_pasca_parjana" class="col-md-2 col-form-label">Pendidikan Pasca Sarjana</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="pendidikan_pasca_parjana" id="pendidikan_pasca_parjana">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bidang_keahlian" class="col-md-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="bidang_keahlian" id="bidang_keahlian">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan_akademik" class="col-md-2 col-form-label">Jabatan Akademik</label>
                        <div class="col-md-10">
                            <select name="jabatan_akademik" class="form-select" id="jabatan_akademik">
                                <option value="tenaga pengajar">Tenaga Pengajar</option>
                                <option value="asisten ahli">Asisten Ahli</option>
                                <option value="lektor">Lektor</option>
                                <option value="lektor kepala">Lektor Kepala</option>
                                <option value="guru besar">Guru Besar</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sertifikat_pendidik_profesional" class="col-md-2 col-form-label">Sertifikat Pendidik Profesional</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="sertifikat_pendidik_profesional" id="sertifikat_pendidik_profesional">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="sertifikat_kompetensi" class="col-md-2 col-form-label">Sertifikat Kompetensi/Profesi/Industri</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="sertifikat_kompetensi" id="sertifikat_kompetensi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi" class="col-md-2 col-form-label">Mata Kuliah yang Diampu pada PS yang Diakreditasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi" id="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu" class="col-md-2 col-form-label">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</label>
                        <div class="col-md-10">
                            <select name="kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu" class="form-select">
                                <option value="1">V</option>
                                <option value="0">-</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-a-4.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection