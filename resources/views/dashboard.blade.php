@extends('layouts.master-layouts')
@section('title', 'SIREPAK')
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Sirepak @endslot
@slot('title') Repositori Akreditasi @endslot
@endcomponent

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-1-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 1</h4>
                        <p class="text-muted mb-0">Kerjasama Pendidikan</p>
                        <span class="badge bg-info">{{ $tabel_1_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-1-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 1</h4>
                        <p class="text-muted mb-0">Kerjasama Penelitian</p>
                        <span class="badge bg-info">{{ $tabel_1_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-8 col-xl-5">
        <div class="card">
            <a href="{{ route('tabel-1-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 1</h4>
                        <p class="text-muted mb-0">Kerjasama Pengabdian Kepada Masyarakat</p>
                        <span class="badge bg-info">{{ $tabel_1_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-2-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 2</h4>
                        <p class="text-muted mb-0">Seleksi Mahasiswa</p>
                        <span class="badge bg-info">{{ $tabel_2_a }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-2-b.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 2</h4>
                        <p class="text-muted mb-0">Mahasiswa Asing</p>
                        <span class="badge bg-info">{{ $tabel_2_b }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Dosen Tetap Perguruan Tinggi</p>
                        <span class="badge bg-info">{{ $tabel_3_a_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Dosen Pembimbing Utama Tugas Akhir</p>
                        <span class="badge bg-info">{{ $tabel_3_a_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</p>
                        <span class="badge bg-info">{{ $tabel_3_a_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-4.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Dosen Tidak Tetap</p>
                        <span class="badge bg-info">{{ $tabel_3_a_4 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-5.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Dosen Industri/Praktisi</p>
                        <span class="badge bg-info">{{ $tabel_3_a_5 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Pengakuan/Rekognisi DTPS</p>
                        <span class="badge bg-info">{{ $tabel_3_b_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Penelitian DTPS</p>
                        <span class="badge bg-info">{{ $tabel_3_b_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">PkM DTPS</p>
                        <span class="badge bg-info">{{ $tabel_3_b_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-4-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Publikasi Ilmiah DTPS</p>
                        <span class="badge bg-info">{{ $tabel_3_b_4_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-4-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS</p>
                        <span class="badge bg-info">{{ $tabel_3_b_4_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-5.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Karya Ilmiah DTPS yang Disitasi</p>
                        <span class="badge bg-info">{{ $tabel_3_b_5 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-6.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">Tabel 3</h4>
                        <p class="text-muted mb-0">Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</p>
                        <span class="badge bg-info">{{ $tabel_3_b_6 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

</div> <!-- end row-->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection