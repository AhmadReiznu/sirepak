@extends('layouts.master-layouts')
@section('title')
Masa Studi Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Masa Studi Lulusan @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-c-2.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Masa Studi Lulusan</h4>
                    <span class="badge bg-danger">Diisi oleh pengusul dari Program Studi pada Program Doktor/Doktor Terapan</span>
                    <div class="mb-3 row">
                        <label for="tahun_masuk" class="col-md-2 col-form-label">Tahun Masuk</label>
                        <div class="col-md-10">
                            <select name="tahun_masuk" class="form-select">
                                <option value="ts-6">TS-6</option>
                                <option value="ts-5">TS-5</option>
                                <option value="ts-4">TS-4</option>
                                <option value="ts-3">TS-3</option>
                                <option value="ts-2">TS-2</option>
                                <option value="ts-1">TS-1</option>
                                <option value="ts">TS</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_mahasiswa_diterima" class="col-md-2 col-form-label">Jumlah Mahasiswa Diterima</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_mahasiswa_diterima" id="jumlah_mahasiswa_diterima">
                        </div>
                    </div>
                    
                    <span class="badge bg-info">Jumlah Mahasiswa Yang Lulus</span>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_6" class="col-md-2 col-form-label">Akhir TS-6</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_6" id="jml_akhir_ts_6">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_5" class="col-md-2 col-form-label">Akhir TS-5</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_5" id="jml_akhir_ts_5">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_4" class="col-md-2 col-form-label">Akhir TS-4</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_4" id="jml_akhir_ts_4">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_3" class="col-md-2 col-form-label">Akhir TS-3</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_3" id="jml_akhir_ts_3">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_2" class="col-md-2 col-form-label">Akhir TS-2</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_2" id="jml_akhir_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts_1" class="col-md-2 col-form-label">Akhir TS-1</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts_1" id="jml_akhir_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jml_akhir_ts" class="col-md-2 col-form-label">Akhir TS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jml_akhir_ts" id="jml_akhir_ts">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="rata_rata_masa_studi" class="col-md-2 col-form-label">Rata-rata Masa Studi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="rata_rata_masa_studi" id="rata_rata_masa_studi">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-c-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection