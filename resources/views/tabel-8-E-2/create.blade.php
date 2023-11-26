@extends('layouts.master-layouts')
@section('title')
Kepuasan Pengguna Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kepuasan Pengguna Lulusan @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-e-2.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Kepuasan Pengguna Lulusan</h4>

                    <div class="mb-3 row">
                        <label for="jenis_kemampuan" class="col-md-2 col-form-label">Jenis Kemampuan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="jenis_kemampuan" id="jenis_kemampuan">
                        </div>
                    </div>

                    <span class="badge bg-info">Tingkat Kepuasan Pengguna (%)</span>
                    <div class="mb-3 row">
                        <label for="tkp_sangat_baik" class="col-md-2 col-form-label">Sangat Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tkp_sangat_baik" id="tkp_sangat_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_baik" class="col-md-2 col-form-label">Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tkp_baik" id="tkp_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_cukup" class="col-md-2 col-form-label">Cukup</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tkp_cukup" id="tkp_cukup">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_kurang" class="col-md-2 col-form-label">Kurang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="tkp_kurang" id="tkp_kurang">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="rencana_tindak_lanjut_oleh_ps" class="col-md-2 col-form-label">Rencana Tindak Lanjut oleh UPPS/PS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="rencana_tindak_lanjut_oleh_ps" id="rencana_tindak_lanjut_oleh_ps">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-e-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection