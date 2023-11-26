@extends('layouts.master-layouts')
@section('title')
Kerjasama Pengabdian Masyarakat
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kerjasama Pengabdian Masyarakat @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-1-3.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Kerjasama Pengabdian Masyarakat</h4>

                    <div class="mb-3 mt-3 row">
                        <label for="lembaga_mitra" class="col-md-2 col-form-label">Lembaga</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="lembaga_mitra" id="lembaga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Tingkat</label>
                        <div class="col-md-10">
                            <select name="tingkat" class="form-select">
                                <option value="lokal">Lokal</option>
                                <option value="nasional">Nasional</option>
                                <option value="internasional">Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="judul_kegiatan" class="col-md-2 col-form-label">Judul Kegiatan Kerjasama</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="judul_kegiatan_kerjasama" id="judul_kegiatan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="manfaat_ps" class="col-md-2 col-form-label">Manfaat bagi PS yang Diakreditasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="manfaat_bagi_ps_yang_diakreditasi" id="manfaat_ps">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="waktu_durasi" class="col-md-2 col-form-label">Waktu & Durasi</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="number" class="form-control" name="waktu_dan_durasi" id="waktu_durasi">
                                <div class="input-group-text">Tahun</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bukti_kerjasama" class="col-md-2 col-form-label">Bukti Kerjasama</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="bukti_kerjasama" id="bukti_kerjasama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tahun_akhir_kerjasama" class="col-md-2 col-form-label">Tahun Berakhirnya Kerjasama</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" name="tahun_berakhirnya_kerjasama" id="tahun_akhir_kerjasama">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-1-3.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection