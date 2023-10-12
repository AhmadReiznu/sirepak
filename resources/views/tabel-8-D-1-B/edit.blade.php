@extends('layouts.master-layouts')
@section('title')
Waktu Tunggu Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Waktu Tunggu Lulusan @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-d-1-b.update', $tabel_8_d_1_b->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Waktu Tunggu Lulusan</h4>
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <select name="tahun_lulus" class="form-select">
                                <option value="{{ $tabel_8_d_1_b->tahun_lulus }}" class="text-capitalize">{{ $tabel_8_d_1_b->tahun_lulus }}</option>
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
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jumlah_lulusan }}" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_terlacak" class="col-md-2 col-form-label">Jumlah Lulusan Yang Terlacak</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jumlah_lulusan_yang_terlacak }}" name="jumlah_lulusan_yang_terlacak" id="jumlah_lulusan_yang_terlacak">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_dipesan_sebelum_lulus" class="col-md-2 col-form-label">Jumlah Lulusan yang Dipesan Sebelum Lulus</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jumlah_lulusan_yang_dipesan_sebelum_lulus }}" name="jumlah_lulusan_yang_dipesan_sebelum_lulus" id="jumlah_lulusan_yang_dipesan_sebelum_lulus">
                        </div>
                    </div>
                    
                    <span class="badge bg-info">Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan </span>
                    <div class="mb-3 row">
                        <label for="jltwtmp_wt_6_bulan" class="col-md-2 col-form-label">WT < 6 bulan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jltwtmp_wt_6_bulan }}" name="jltwtmp_wt_6_bulan" id="jltwtmp_wt_6_bulan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltwtmp_6_wt_18_bulan" class="col-md-2 col-form-label">6 ≤ WT ≤ 18 bulan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jltwtmp_6_wt_18_bulan }}" name="jltwtmp_6_wt_18_bulan" id="jltwtmp_6_wt_18_bulan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltwtmp_wt_18_bulan" class="col-md-2 col-form-label">WT > 18 bulan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_1_b->jltwtmp_wt_18_bulan }}" name="jltwtmp_wt_18_bulan" id="jltwtmp_wt_18_bulan">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-d-1-b.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection