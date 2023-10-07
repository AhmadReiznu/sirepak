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
    <a href="{{ url('/tabel-1-1/create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered data-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Lembaga</th>
                                <th colspan="3">Tingkat</th>
                                <th rowspan="2">Judul Kegiatan Kerjasama</th>
                                <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                                <th rowspan="2">Waktu dan Durasi</th>
                                <th rowspan="2">Bukti Kerjasama</th>
                                <th rowspan="2">Tahun Berakhirnya Kerjasama</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Internasional</th>
                                <th>Nasional</th>
                                <th>Wilayah/Lokal</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/tabel-1-1') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'lembaga_mitra',
                    name: 'lembaga_mitra'
                },
                {
                    data: 'internasional',
                    name: 'internasional'
                },
                {
                    data: 'nasional',
                    name: 'nasional'
                },
                {
                    data: 'lokal',
                    name: 'lokal'
                },
                {
                    data: 'judul_kegiatan_kerjasama',
                    name: 'judul_kegiatan_kerjasama'
                },
                {
                    data: 'manfaat_bagi_ps_yang_diakreditasi',
                    name: 'manfaat_bagi_ps_yang_diakreditasi'
                },
                {
                    data: 'waktu_dan_durasi',
                    name: 'waktu_dan_durasi'
                },
                {
                    data: 'bukti',
                    name: 'bukti'
                },
                {
                    data: 'tahun_berakhirnya_kerjasama',
                    name: 'tahun_berakhirnya_kerjasama'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
@endsection