@extends('layouts.master-layouts')
@section('title')
PkM DTPS
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') PkM DTPS @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-b-3.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2" class="text-center">Sumber Pembiayaan</th>
                                <th colspan="3" class="text-center">Jumlah Judul Pkm</th>
                                <th rowspan="2" class="text-center">Jumlah</th>
                                <th rowspan="2" class="text-center">Aksi</th>
                            </tr>
                            <tr>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
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
            ajax: "{{ url('/tabel-3-b-3') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'sumber_pembiayaan',
                    name: 'sumber_pembiayaan'
                },
                {
                    data: 'jumlah_judul_pkm_ts_2',
                    name: 'jumlah_judul_pkm_ts_2'
                },
                {
                    data: 'jumlah_judul_pkm_ts_1',
                    name: 'jumlah_judul_pkm_ts_1'
                },
                {
                    data: 'jumlah_judul_pkm_ts',
                    name: 'jumlah_judul_pkm_ts'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah'
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