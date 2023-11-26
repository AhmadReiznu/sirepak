@extends('layouts.master-layouts')
@section('title')
Dosen Tetap Perguruan Tinggi
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dosen Tetap Perguruan Tinggi @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">

            <form action="{{ route('tabel-3-a-1.update', $tabel_3_a_1->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
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
                        <h4 class="card-title">Ubah Data Dosen Tetap Perguruan Tinggi</h4>
                        <div class="mb-3 row">
                            <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->nama_dosen }}" name="nama_dosen" id="nama_dosen">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nidn" class="col-md-2 col-form-label">NIDN/NIDK</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value="{{ $tabel_3_a_1->nidn }}" name="nidn" id="nidn">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="pendidikan_pasca_sarjana_magister" class="col-md-2 col-form-label">Pendidikan Pasca Sarjana (Magister/Magister Terapan/Spesialis)</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->pendidikan_pasca_sarjana_magister }}" name="pendidikan_pasca_sarjana_magister" id="pendidikan_pasca_sarjana_magister">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pendidikan_pasca_sarjana_doktor" class="col-md-2 col-form-label">Pendidikan Pasca Sarjana (Doktor/Doktor Terapan/Spesialis)</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->pendidikan_pasca_sarjana_doktor }}" name="pendidikan_pasca_sarjana_doktor" id="pendidikan_pasca_sarjana_doktor">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="bidang_keahlian" class="col-md-2 col-form-label">Bidang Keahlian</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->bidang_keahlian }}" name="bidang_keahlian" id="bidang_keahlian">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kesesuaian_dengan_kompetensi_inti_ps" class="col-md-2 col-form-label">Kesesuaian Dengan Kompetensi Inti PS</label>
                            <div class="col-md-10">
                                <select name="kesesuaian_dengan_kompetensi_inti_ps" class="form-select">
                                    <option value="{{ $tabel_3_a_1->kesesuaian_dengan_kompetensi_inti_ps }}" selected class="text-capitalize">{{ $tabel_3_a_1->kesesuaian_dengan_kompetensi_inti_ps }}</option>
                                    <option value="1">V</option>
                                    <option value="0">-</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="jabatan_akademik" class="col-md-2 col-form-label">Jabatan Akademik</label>
                            <div class="col-md-10">
                                <select name="jabatan_akademik" class="form-select">
                                    <option value="{{ $tabel_3_a_1->jabatan_akademik }}" selected class="text-capitalize">{{ $tabel_3_a_1->jabatan_akademik }}</option>
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
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->sertifikat_pendidik_profesional }}" name="sertifikat_pendidik_profesional" id="sertifikat_pendidik_profesional">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sertifikat_kompetensi_profesi_industri" class="col-md-2 col-form-label">Sertifikat Kompetensi/Profesi/Industri</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->sertifikat_kompetensi_profesi_industri }}" name="sertifikat_kompetensi_profesi_industri" id="sertifikat_kompetensi_profesi_industri">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi" class="col-md-2 col-form-label">Mata Kuliah yang Diampu pada PS yang Diakreditasi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi }}" name="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi" id="mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu" class="col-md-2 col-form-label">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu }}" name="kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu" id="kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="mata_kuliah_yang_diampu_pada_ps_lain" class="col-md-2 col-form-label">Mata Kuliah yang Diampu pada PS Lain</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_lain }}" name="mata_kuliah_yang_diampu_pada_ps_lain" id="mata_kuliah_yang_diampu_pada_ps_lain">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Ubah</button>
                        <button class="btn btn-danger">
                            <a href="{{ route('tabel-3-a-1.index') }}" class="text-white">Batal</a>
                        </button>
                    </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection