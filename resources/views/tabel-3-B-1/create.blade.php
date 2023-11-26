@extends('layouts.master-layouts')
@section('title')
Pengakuan/Rekognisi DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pengakuan/Rekognisi DTPS @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-1.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Pengakuan/Rekognisi DTPS</h4>
                    <div class="mb-3 row">
                        <label for="nama_dosen" class="col-md-2 col-form-label">Nama Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_dosen" id="nama_dosen">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="bidang_keahlian" class="col-md-2 col-form-label">Bidang Keahlian</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="bidang_keahlian" id="bidang_keahlian">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="rekognisi_dan_bukti_pendukung" class="col-md-2 col-form-label">Rekognisi dan Bukti Pendukung</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="rekognisi_dan_bukti_pendukung" id="rekognisi_dan_bukti_pendukung">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Tingkat</label>
                        <div class="col-md-10">
                            <select name="tingkat" class="form-select">
                                <option value="wilayah">Wilayah</option>
                                <option value="nasional">Nasional</option>
                                <option value="internasional">Internasional</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tahun" class="col-md-2 col-form-label">Tahun</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="tahun" id="tahun">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-1.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection