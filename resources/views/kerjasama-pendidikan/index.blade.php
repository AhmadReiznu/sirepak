@extends('layouts.master-layouts')
@section('title')
Kerjasama
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kerjasama @endslot
@slot('title') Kerjasama Pendidikan @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ Route('kerjasama-pendidikan.create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                {{-- <h4 class="card-title">Default Datatable</h4>
                    <p class="card-title-desc">DataTables has most features enabled by
                        default, so all you need to do to use it with your own tables is to call
                        the construction function: <code>$().DataTable();</code>.
                    </p> --}}

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center">
                        <tbody>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Lembaga</th>
                                <th colspan="3">Tingkat</th>
                                <th rowspan="2">Judul Kegiatan Kerjasama</th>
                                <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                                <th rowspan="2">Waktu dan Durasi</th>
                                <th rowspan="2">Bukti Kerjasama</th>
                                <th rowspan="2">Tahun Berakhirnya Kerjasama</th>
                            </tr>
                            <tr>
                                <th>Internasional</th>
                                <th>Nasional</th>
                                <th>Wilayah/Lokal</th>
                            </tr>
                            @foreach ($tabels11 as $tabel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tabel->lembaga_mitra }}</td>
                                <td>{{ $tabel->tingkat == 'internasional' ? 'X' : '' }}</td>
                                <td>{{ $tabel->tingkat == 'nasional' ? 'X' : '' }}</td>
                                <td>{{ $tabel->tingkat == 'lokal' ? 'X' : '' }}</td>
                                <td>{{ $tabel->judul_kegiatan_kerjasama }}</td>
                                <td>{{ $tabel->manfaat_bagi_ps_yang_diakreditasi }}</td>
                                <td>{{ $tabel->waktu_dan_durasi }}</td>
                                <td><a href="{{ asset('dokumen/'.$tabel->bukti_kerjasama) }}" target="_blank">Lihat/Download</a></td>
                                <td>{{ $tabel->tahun_berakhirnya_kerjasama }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

{{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Buttons example</h4>
                    <p class="card-title-desc">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>

                        <tbody></tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row --> --}}

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection