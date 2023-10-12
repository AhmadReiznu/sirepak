@extends('layouts.master-layouts')
@section('title')
Penggunaan Dana
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Penggunaan Dana @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-4.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2" class="text-center">No</th>
                                <th rowspan="2" class="text-center">Jenis Penggunaan</th>
                                <th colspan="4" class="text-center">Unit Pengelola Program Studi<br>(Rupiah)</th>
                                <th colspan="4">Program Studi<br>(Rupiah)</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
                                <th>Rata-Rata</th>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
                                <th>Rata-Rata</th>
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
            ajax: "{{ url('/tabel-4') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'jenis_penggunaan',
                    name: 'jenis_penggunaan'
                },
                {
                    data: 'unit_pengelola_program_studi_ts_2',
                    name: 'unit_pengelola_program_studi_ts_2',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'unit_pengelola_program_studi_ts_1',
                    name: 'unit_pengelola_program_studi_ts_1',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'unit_pengelola_program_studi_ts',
                    name: 'unit_pengelola_program_studi_ts',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'rata_rata_1',
                    name: 'rata_rata_1',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'program_studi_ts_2',
                    name: 'program_studi_ts_2',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'program_studi_ts_1',
                    name: 'program_studi_ts_1',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'program_studi_ts',
                    name: 'program_studi_ts',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
                },
                {
                    data: 'rata_rata_2',
                    name: 'rata_rata_2',
                    render: function (data) {
                        return 'Rp ' + numberWithCommas(data);
                    }
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

    // Fungsi untuk membuat pemisah ribuan dalam format rupiah
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>
@endsection