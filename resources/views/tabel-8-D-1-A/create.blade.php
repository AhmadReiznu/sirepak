@extends('layouts.master-layouts')
@section('title')
Waktu Tunggu Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Waktu Tunggu Lulusan @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-d-1-a.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Waktu Tunggu Lulusan</h4>
                    <span class="badge bg-danger">Diisi oleh pengusul dari Program Studi pada Program Diploma Tiga</span>
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <select name="tahun_lulus" class="form-select">
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
                        <label for="jumlah_lulusan" class="col-md-2 col-form-label">Jumlah Lulusan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_terlacak" class="col-md-2 col-form-label">Jumlah Lulusan Yang Terlacak</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_lulusan_yang_terlacak" id="jumlah_lulusan_yang_terlacak">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_dipesan_sebelum_lulus" class="col-md-2 col-form-label">Jumlah Lulusan yang Dipesan Sebelum Lulus</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_lulusan_yang_dipesan_sebelum_lulus" id="jumlah_lulusan_yang_dipesan_sebelum_lulus">
                        </div>
                    </div>

                    <span class="badge bg-info">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan </span>
                    <div class="mb-3 row">
                        <label for="jltwtmp_wt_3_bulan" class="col-md-2 col-form-label">WT < 3 bulan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="jltwtmp_wt_3_bulan" id="jltwtmp_wt_3_bulan">
                                </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltwtmp_3_wt_6_bulan" class="col-md-2 col-form-label">3 ≤ WT ≤ 6 bulan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jltwtmp_3_wt_6_bulan" id="jltwtmp_3_wt_6_bulan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltwtmp_wt_6_bulan" class="col-md-2 col-form-label">WT > 6 bulan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jltwtmp_wt_6_bulan" id="jltwtmp_wt_6_bulan">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-d-1-a.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection