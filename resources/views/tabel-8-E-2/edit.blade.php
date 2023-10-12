@extends('layouts.master-layouts')
@section('title')
Kepuasan Pengguna Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kepuasan Pengguna Lulusan @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-e-2.update', $tabel_8_e_2->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Kepuasan Pengguna Lulusan</h4>
                    <div class="mb-3 row">
                        <label for="jenis_kemampuan" class="col-md-2 col-form-label">Jenis Kemampuan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_8_e_2->jenis_kemampuan }}" name="jenis_kemampuan" id="jenis_kemampuan">
                        </div>
                    </div>
                    
                    <span class="badge bg-info">Tingkat Kepuasan Pengguna (%)</span>
                    <div class="mb-3 row">
                        <label for="tkp_sangat_baik" class="col-md-2 col-form-label">Sangat Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_2->tkp_sangat_baik }}" name="tkp_sangat_baik" id="tkp_sangat_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_baik" class="col-md-2 col-form-label">Baik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_2->tkp_baik }}" name="tkp_baik" id="tkp_baik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_cukup" class="col-md-2 col-form-label">Cukup</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_2->tkp_cukup }}" name="tkp_cukup" id="tkp_cukup">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tkp_kurang" class="col-md-2 col-form-label">Kurang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_e_2->tkp_kurang }}" name="tkp_kurang" id="tkp_kurang">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="rencana_tindak_lanjut_oleh_ps" class="col-md-2 col-form-label">Rencana Tindak Lanjut oleh UPPS/PS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $tabel_8_e_2->rencana_tindak_lanjut_oleh_ps }}" name="rencana_tindak_lanjut_oleh_ps" id="rencana_tindak_lanjut_oleh_ps">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
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