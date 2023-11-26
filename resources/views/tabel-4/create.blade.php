@extends('layouts.master-layouts')
@section('title')
Penggunaan Dana
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Penggunaan Dana @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-4.store') }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Tambah Data Penggunaan Dana</h4>
                    <div class="mb-3 row">
                        <label for="jenis_penggunaan" class="col-md-2 col-form-label">Jenis Penggunaan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="jenis_penggunaan" id="jenis_penggunaan">
                        </div>
                    </div>

                    <p class="badge bg-info">Unit Pengelola Program Studi (Rupiah)</p>
                    <div class="mb-3 row">
                        <label for="unit_pengelola_program_studi_ts_2" class="col-md-2 col-form-label">TS-2</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="unit_pengelola_program_studi_ts_2" id="unit_pengelola_program_studi_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="unit_pengelola_program_studi_ts_1" class="col-md-2 col-form-label">TS-1</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="unit_pengelola_program_studi_ts_1" id="unit_pengelola_program_studi_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="unit_pengelola_program_studi_ts" class="col-md-2 col-form-label">TS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="unit_pengelola_program_studi_ts" id="unit_pengelola_program_studi_ts">
                        </div>
                    </div>

                    <p class="badge bg-info">Program Studi (Rupiah)</p>
                    <div class="mb-3 row">
                        <label for="program_studi_ts_2" class="col-md-2 col-form-label">TS-2</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="program_studi_ts_2" id="program_studi_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="program_studi_ts_1" class="col-md-2 col-form-label">TS-1</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="program_studi_ts_1" id="program_studi_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="program_studi_ts" class="col-md-2 col-form-label">TS</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="program_studi_ts" id="program_studi_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-4.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection