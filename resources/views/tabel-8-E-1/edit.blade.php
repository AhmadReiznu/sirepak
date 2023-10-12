@extends('layouts.master-layouts')
@section('title')
Tempat Kerja Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Tempat Kerja Lulusan @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-e-1.update', $tabel_8_e_1->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Tempat Kerja Lulusan</h4>
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <select name="tahun_lulus" class="form-select">
                                <option value="{{ $tabel_8_e_1->tahun_lulus }}" class="text-capitalize">{{ $tabel_8_e_1->tahun_lulus }}</option>
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
                            <input class="form-control" type="number" value="{{ $tabel_8_e_1->jumlah_lulusan }}" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_terlacak" class="col-md-2 col-form-label">Jumlah Lulusan Yang Terlacak</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_1->jumlah_lulusan_yang_terlacak }}" name="jumlah_lulusan_yang_terlacak" id="jumlah_lulusan_yang_terlacak">
                        </div>
                    </div>
                    
                    <span class="badge bg-info">Jumlah Lulusan Terlacak yang Bekerja Berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</span>
                    <div class="mb-3 row">
                        <label for="jltbbt_lokal" class="col-md-2 col-form-label">Lokal/Wilayah/Berwirausaha tidak Berbadan Hukum</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_1->jltbbt_lokal }}" name="jltbbt_lokal" id="jltbbt_lokal">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltbbt_nasional" class="col-md-2 col-form-label">Nasional/Berwirausaha Berbadan Hukum</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_1->jltbbt_nasional }}" name="jltbbt_nasional" id="jltbbt_nasional">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jltbbt_multinasional" class="col-md-2 col-form-label">Multinasional/Internasional</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_1->jltbbt_multinasional }}" name="jltbbt_multinasional" id="jltbbt_multinasional">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-e-1.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection