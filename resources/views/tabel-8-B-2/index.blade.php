@extends('layouts.master-layouts')
@section('title')
Prestasi Non-akademik Mahasiswa
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Prestasi Non-akademik Mahasiswa @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-8-b-2.create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="data-table table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama Kegiatan</th>
                                <th rowspan="2">Waktu Perolehan<br>(YYYY)</th>
                                <th colspan="3" class="text-center">Tingkat</th>
                                <th rowspan="2">Prestasi Yang Dicapai</th>
                                <th rowspan="2">Aksi</th>
                            </tr>

                            <tr>
                                <th>Lokal/Wilayah</th>
                                <th>Nasional</th>
                                <th>Internasional</th>
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
            ajax: "{{ url('/tabel-8-b-2') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'nama_kegiatan',
                    name: 'nama_kegiatan'
                },
                {
                    data: 'waktu_perolehan',
                    name: 'waktu_perolehan'
                },
                {
                    data: 'lokal',
                    name: 'lokal'
                },
                {
                    data: 'nasional',
                    name: 'nasional'
                },
                {
                    data: 'internasional',
                    name: 'internasional'
                },
                {
                    data: 'prestasi_yang_dicapai',
                    name: 'prestasi_yang_dicapai'
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