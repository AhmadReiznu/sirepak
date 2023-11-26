@extends('layouts.master-layouts')
@section('title')
Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-a-3.update', $tabel_3_a_3->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_3_a_3->nama_dosen }}" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dtps" class="col-md-2 col-form-label">DTPS</label>
                        <div class="col-md-10">
                            <select name="dtps" class="form-select">
                                <option value="{{ $tabel_3_a_3->dtps }}" class="text-capitalize">{{ $tabel_3_a_3->dtps }}</option>
                                <option value="1">V</option>
                                <option value="0">-</option>
                            </select>
                        </div>
                    </div>

                    <h5><span class="badge bg-secondary">Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</span></h5>
                    <span class="badge bg-primary mb-3">Pendidikan: Pembelajaran dan Pembimbingan</span>
                    <div class="mb-3 row">
                        <label for="ewmp_pendidikan_ps_yang_diakreditasi" class="col-md-2 col-form-label">PS yang Diakreditasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_pendidikan_ps_yang_diakreditasi }}" name="ewmp_pendidikan_ps_yang_diakreditasi" id="ewmp_pendidikan_ps_yang_diakreditasi">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ewmp_pendidikan_ps_lain_di_dalam_pt" class="col-md-2 col-form-label">PS Lain di Dalam PT</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_dalam_pt }}" name="ewmp_pendidikan_ps_lain_di_dalam_pt" id="ewmp_pendidikan_ps_lain_di_dalam_pt">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ewmp_pendidikan_ps_lain_di_luar_pt" class="col-md-2 col-form-label">PS Lain di Luar PT</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_luar_pt }}" name="ewmp_pendidikan_ps_lain_di_luar_pt" id="ewmp_pendidikan_ps_lain_di_luar_pt">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ewmp_penelitian" class="col-md-2 col-form-label">Penelitian</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_penelitian }}" name="ewmp_penelitian" id="ewmp_penelitian">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ewmp_pkm" class="col-md-2 col-form-label">PkM</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_pkm }}" name="ewmp_pkm" id="ewmp_pkm">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ewmp_tugas_tambahan" class="col-md-2 col-form-label">Tugas Tambahan dan/atau Penunjang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_a_3->ewmp_tugas_tambahan }}" name="ewmp_tugas_tambahan" id="ewmp_tugas_tambahan">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-a-3.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection