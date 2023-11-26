@extends('layouts.master-layouts')
@section('title')
Kesesuaian Bidang Kerja Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kesesuaian Bidang Kerja Lulusan @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-d-2.update', $tabel_8_d_2->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data Kesesuaian Bidang Kerja Lulusan</h4>
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <select name="tahun_lulus" class="form-select">
                                <option value="{{ $tabel_8_d_2->tahun_lulus }}" class="text-capitalize">{{ $tabel_8_d_2->tahun_lulus }}</option>
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
                            <input class="form-control" type="number" value="{{ $tabel_8_d_2->jumlah_lulusan }}" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_lulusan_yang_terlacak" class="col-md-2 col-form-label">Jumlah Lulusan Yang Terlacak</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_2->jumlah_lulusan_yang_terlacak }}" name="jumlah_lulusan_yang_terlacak" id="jumlah_lulusan_yang_terlacak">
                        </div>
                    </div>

                    <span class="badge bg-info">Jumlah lulusan Terlacak dengan Tingkat Keseuaian Bidang Kerja</span>
                    <div class="mb-3 row">
                        <label for="jlttkbk_rendah" class="col-md-2 col-form-label">Rendah</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_2->jlttkbk_rendah }}" name="jlttkbk_rendah" id="jlttkbk_rendah">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jlttkbk_sedang" class="col-md-2 col-form-label">Sedang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_2->jlttkbk_sedang }}" name="jlttkbk_sedang" id="jlttkbk_sedang">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jlttkbk_tinggi" class="col-md-2 col-form-label">Tinggi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_8_d_2->jlttkbk_tinggi }}" name="jlttkbk_tinggi" id="jlttkbk_tinggi">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-d-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection