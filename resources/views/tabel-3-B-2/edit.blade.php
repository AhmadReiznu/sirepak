@extends('layouts.master-layouts')
@section('title')
Penelitian DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Penelitian DTPS @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-2.update', $tabel_3_b_2->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Penelitian DTPS</h4>
                    <div class="mb-3 row">
                        <label for="sumber_pembiayaan" class="col-md-2 col-form-label">Sumber Pembiayaan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" cols="30" rows="10">
                                {{ $tabel_3_b_2->sumber_pembiayaan }}
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="jumlah_judul_penelitian_ts_2" class="col-md-2 col-form-label">TS-2</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_2->jumlah_judul_penelitian_ts_2 }}" name="jumlah_judul_penelitian_ts_2" id="jumlah_judul_penelitian_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_penelitian_ts_1" class="col-md-2 col-form-label">TS-1</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_2->jumlah_judul_penelitian_ts_1 }}" name="jumlah_judul_penelitian_ts_1" id="jumlah_judul_penelitian_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_penelitian_ts" class="col-md-2 col-form-label">TS</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_2->jumlah_judul_penelitian_ts }}" name="jumlah_judul_penelitian_ts" id="jumlah_judul_penelitian_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-2.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection