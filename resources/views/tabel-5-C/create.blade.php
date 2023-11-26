@extends('layouts.master-layouts')
@section('title')
Kepuasan Mahasiswa
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kepuasan Mahasiswa @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-5-c.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Kepuasan Mahasiswa</h4>
                    <div class="mb-3 row">
                        <label for="aspek_yang_diukur" class="col-md-2 col-form-label">Aspek yang Diukur</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="aspek_yang_diukur" id="aspek_yang_diukur" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <p class="badge bg-info">Tingkat Kepuasan Mahasiswa</p>
                    <div class="mb-3 row">
                        <label for="tkm_sangat_baik" class="col-md-2 col-form-label">Sangat Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" step="0.01" name="tkm_sangat_baik" id="tkm_sangat_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkm_baik" class="col-md-2 col-form-label">Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" step="0.01" name="tkm_baik" id="tkm_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkm_cukup" class="col-md-2 col-form-label">Cukup</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" step="0.01" name="tkm_cukup" id="tkm_cukup">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkm_kurang" class="col-md-2 col-form-label">Kurang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" step="0.01" name="tkm_kurang" id="tkm_kurang">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="rencana_tindak_lanjut_oleh_ps" class="col-md-2 col-form-label">Rencana Tindak Lanjut oleh UPPS/PS</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="rencana_tindak_lanjut_oleh_ps" id="rencana_tindak_lanjut_oleh_ps" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-5-c.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection