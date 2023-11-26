@extends('layouts.master-layouts')
@section('title')
Prestasi Akademik Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Prestasi Akademik Mahasiswa @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-b-1.update', $tabel_8_b_1->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data Prestasi Akademik Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="nama_kegiatan" class="col-md-2 col-form-label">Nama Kegiatan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_8_b_1->nama_kegiatan }}" name="nama_kegiatan" id="nama_kegiatan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="waktu_perolehan" class="col-md-2 col-form-label">Tahun Perolehan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_b_1->waktu_perolehan }}" name="waktu_perolehan" id="waktu_perolehan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tingkat" class="col-md-2 col-form-label">Tingkat</label>
                        <div class="col-md-10">
                            <select name="tingkat" class="form-select">
                                <option value="{{ $tabel_8_b_1->tingkat }}" selected class="text-capitalize">{{ $tabel_8_b_1->tingkat }}</option>
                                <option value="lokal">Lokal</option>
                                <option value="nasional">Nasional</option>
                                <option value="internasional">Internasional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prestasi_yang_dicapai" class="col-md-2 col-form-label">Prestasi Yang Dicapai</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_8_b_1->prestasi_yang_dicapai }}" name="prestasi_yang_dicapai" id="prestasi_yang_dicapai">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-b-1.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection