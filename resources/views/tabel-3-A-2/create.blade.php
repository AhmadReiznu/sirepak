@extends('layouts.master-layouts')
@section('title')
Dosen Pembimbing Utama Tugas Akhir
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dosen Pembimbing Utama Tugas Akhir @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-a-2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Dosen Pembimbing Utama Tugas Akhir</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <h3><span class="badge bg-secondary">Jumlah Mahasiswa yang Dibimbing</span></h3>
                    <span class="badge bg-primary">pada PS yang Diakreditasi</span>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2" class="col-md-2 col-form-label">TS-2</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1" class="col-md-2 col-form-label">TS-1</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts" class="col-md-2 col-form-label">TS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts">
                        </div>
                    </div>
                    
                    <span class="badge bg-primary">pada PS Lain di PT</span>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2" class="col-md-2 col-form-label">TS-2</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1" class="col-md-2 col-form-label">TS-1</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts" class="col-md-2 col-form-label">TS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts" id="jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-a-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection