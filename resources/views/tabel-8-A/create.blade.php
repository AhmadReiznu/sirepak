@extends('layouts.master-layouts')
@section('title')
IPK Lulusan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') IPK Lulusan @endslot
@slot('title') Tambah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ route('kerjasama-pendidikan.index') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-8-a.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Tambah Data IPK Lulusan</h4>
                    <div class="mb-3 row">
                        <label for="tahun_lulus" class="col-md-2 col-form-label">Tahun Lulus</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="tahun_lulus" id="tahun_lulus">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jumlah_lulusan" class="col-md-2 col-form-label">Jumlah Lulusan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="jumlah_lulusan" id="jumlah_lulusan">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="ipk_min" class="col-md-2 col-form-label">IPK Min</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="ipk_min" id="ipk_min">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ipk_rata_rata" class="col-md-2 col-form-label">IPK Rata-Rata</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="ipk_rata_rata" id="ipk_rata_rata">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ipk_maks" class="col-md-2 col-form-label">IPK Maks</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" name="ipk_maks" id="ipk_maks">
                        </div>
                    </div>
                    

                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button class="btn btn-danger">
                        <a href="{{ route('tabel-8-a.index') }}" class="text-white">Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection