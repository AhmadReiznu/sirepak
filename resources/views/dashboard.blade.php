@extends('layouts.master-layouts')
@section('title', 'SIREPAK')
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Sirepak @endslot
@slot('title') Repositori Akreditasi @endslot
@endcomponent

<div class="row">
    <h3>Tabel 1</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-1-1.index') }}">
                <div class="card-body">
                    <div>
                        <h5 class="mb-1 mt-1">Kerjasama Pendidikan</h5>
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
                    <div>
                        <h5 class="mb-1 mt-1">Kerjasama Penelitian</h5>
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
                    <div>
                        <h5 class="mb-1 mt-1">Kerjasama Pengabdian Kepada Masyarakat</h5>
                        <span class="badge bg-info">{{ $tabel_1_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 2</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-2-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Seleksi Mahasiswa</h5>
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
                        <h5 class="mb-1 mt-1">Mahasiswa Asing</h5>
                        <span class="badge bg-info">{{ $tabel_2_b }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 3</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-a-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Dosen Tetap Perguruan Tinggi</h5>
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
                        <h5 class="mb-1 mt-1">Dosen Pembimbing Utama Tugas Akhir</h5>
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
                        <h5 class="mb-1 mt-1">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</h5>
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
                        <h5 class="mb-1 mt-1">Dosen Tidak Tetap</h5>
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
                        <h5 class="mb-1 mt-1">Dosen Industri/Praktisi</h5>
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
                        <h5 class="mb-1 mt-1">Pengakuan/Rekognisi DTPS</h5>
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
                        <h5 class="mb-1 mt-1">Penelitian DTPS</h5>
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
                        <h5 class="mb-1 mt-1">PkM DTPS</h5>
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
                        <h5 class="mb-1 mt-1">Publikasi Ilmiah DTPS</h5>
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
                        <h5 class="mb-1 mt-1">Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS</h5>
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
                        <h5 class="mb-1 mt-1">Karya Ilmiah DTPS yang Disitasi</h5>
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
                        <h5 class="mb-1 mt-1">Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat</h5>
                        <span class="badge bg-info">{{ $tabel_3_b_6 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-7-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM Lainnya oleh DTPS - Bagian-1 HKI (Paten, Paten Sederhana)</h5>
                        <span class="badge bg-info">{{ $tabel_3_b_7_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-7-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM Lainnya oleh DTPS - Bagian-2 HKI (Hak Cipta, Desain Produk Industri, dll.)</h5>
                        <span class="badge bg-info">{{ $tabel_3_b_7_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-7-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM Lainnya oleh DTPS - Bagian-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial</h5>
                        <span class="badge bg-info">{{ $tabel_3_b_7_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-3-b-7-4.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM Lainnya oleh DTPS - Bagian-4 Buku Ber-ISBN, Book Chapter</h5>
                        <span class="badge bg-info">{{ $tabel_3_b_7_4 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 4</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-4.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Penggunaan Dana</h5>
                        <span class="badge bg-info">{{ $tabel_4 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 5</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-5-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran</h5>
                        <span class="badge bg-info">{{ $tabel_5_a }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-5-b.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</h5>
                        <span class="badge bg-info">{{ $tabel_5_b }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-5-c.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Kepuasaan Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_5_c }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 6</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-6-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Penelitian DTPS yang Melibatkan Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_6_a }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-6-b.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi</h5>
                        <span class="badge bg-info">{{ $tabel_6_b }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 7</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-7.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">PkM DTPS yang Melibatkan Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_7 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <h3>Tabel 8</h3>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">IPK Lulusan</h5>
                        <span class="badge bg-info">{{ $tabel_8_a }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-b-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Prestasi Akademik Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_8_b_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-b-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Prestasi Non-akademik Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_8_b_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-c-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Masa Studi Lulusan (1)</h5>
                        <span class="badge bg-info">{{ $tabel_8_c_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-c-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Masa Studi Lulusan (2)</h5>
                        <span class="badge bg-info">{{ $tabel_8_c_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-c-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Masa Studi Lulusan (3)</h5>
                        <span class="badge bg-info">{{ $tabel_8_c_3 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-c-4.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Masa Studi Lulusan (4)</h5>
                        <span class="badge bg-info">{{ $tabel_8_c_4 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-d-1-a.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Waktu Tunggu Lulusan (1)</h5>
                        <span class="badge bg-info">{{ $tabel_8_d_1_a }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-d-1-b.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Waktu Tunggu Lulusan (2)</h5>
                        <span class="badge bg-info">{{ $tabel_8_d_1_b }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-d-1-c.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Waktu Tunggu Lulusan (3)</h5>
                        <span class="badge bg-info">{{ $tabel_8_d_1_c }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-e-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Tempat Kerja Lulusan</h5>
                        <span class="badge bg-info">{{ $tabel_8_e_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-e-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Kepuasan Pengguna Lulusan</h5>
                        <span class="badge bg-info">{{ $tabel_8_e_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-1-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Publikasi Ilmiah Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_8_f_1_1 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-1-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Pagelaran/Pameran/Presentasi/Publikasi Ilmiah Mahasiswa</h5>
                        <span class="badge bg-info">{{ $tabel_8_f_1_2 }}</span>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Karya Ilmiah Mahasiswa yang Disitasi</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_2 }}</span> --}}
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Produk/Jasa DTPS yang Dihasilkan Mahasiswa yang Diadopsi oleh Industri/Masyarakat</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_3 }}</span> --}}
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-4-1.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-1 HKI (Paten, Paten Sederhana)</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_4_1 }}</span> --}}
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-4-2.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-2 HKI (Hak Cipta, Desain Produk Industri, dll.)</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_4_2 }}</span> --}}
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-4-3.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_4_3 }}</span> --}}
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- end col-->
    
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <a href="{{ route('tabel-8-f-4-4.index') }}">
                <div class="card-body">
                    <div class="float-end mt-2">
                        {{-- <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div> --}}
                    </div>
                    <div>
                        <h5 class="mb-1 mt-1">Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-4 Buku Ber-ISBN, Book Chapter</h5>
                        {{-- <span class="badge bg-info">{{ $tabel_3_f_4_4 }}</span> --}}
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