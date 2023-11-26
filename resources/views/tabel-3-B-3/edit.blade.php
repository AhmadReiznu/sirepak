@extends('layouts.master-layouts')
@section('title')
PkM DTPS
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') PkM DTPS @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-3-b-3.update', $tabel_3_b_3->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h4 class="card-title">Ubah Data PkM DTPS</h4>
                    <div class="mb-3 row">
                        <label for="sumber_pembiayaan" class="col-md-2 col-form-label">Sumber Pembiayaan</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" cols="30" rows="10">
                            {{ $tabel_3_b_3->sumber_pembiayaan }}
                            </textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts_2" class="col-md-2 col-form-label">TS-2</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_3->jumlah_judul_pkm_ts_2 }}" name="jumlah_judul_pkm_ts_2" id="jumlah_judul_pkm_ts_2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts_1" class="col-md-2 col-form-label">TS-1</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_3->jumlah_judul_pkm_ts_1 }}" name="jumlah_judul_pkm_ts_1" id="jumlah_judul_pkm_ts_1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jumlah_judul_pkm_ts" class="col-md-2 col-form-label">TS</label></label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="{{ $tabel_3_b_3->jumlah_judul_pkm_ts }}" name="jumlah_judul_pkm_ts" id="jumlah_judul_pkm_ts">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-3-b-3.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection