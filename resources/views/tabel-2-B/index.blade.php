@extends('layouts.master-layouts')
@section('title')
Mahasiswa Asing
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Mahasiswa Asing @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-2-b.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2">Program Studi</th>
                                <th colspan="3">Jumlah Mahasiswa Aktif</th>
                                <th colspan="3">Jumlah Mahasiswa Asing Full-time</th>
                                <th colspan="3">Jumlah Mahasiswa Asing Part-time</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
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
            ajax: "{{ url('/tabel-2-b') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'program_studi',
                    name: 'program_studi'
                },
                {
                    data: 'jumlah_mahasiswa_aktif_ts_2',
                    name: 'jumlah_mahasiswa_aktif_ts_2'
                },
                {
                    data: 'jumlah_mahasiswa_aktif_ts_1',
                    name: 'jumlah_mahasiswa_aktif_ts_1'
                },
                {
                    data: 'jumlah_mahasiswa_aktif_ts',
                    name: 'jumlah_mahasiswa_aktif_ts'
                },
                {
                    data: 'jumlah_mahasiswa_asing_penuh_waktu_ts_2',
                    name: 'jumlah_mahasiswa_asing_penuh_waktu_ts_2'
                },
                {
                    data: 'jumlah_mahasiswa_asing_penuh_waktu_ts_1',
                    name: 'jumlah_mahasiswa_asing_penuh_waktu_ts_1'
                },
                {
                    data: 'jumlah_mahasiswa_asing_penuh_waktu_ts',
                    name: 'jumlah_mahasiswa_asing_penuh_waktu_ts'
                },
                {
                    data: 'jumlah_mahasiswa_asing_paruh_waktu_ts_2',
                    name: 'jumlah_mahasiswa_asing_paruh_waktu_ts_2'
                },
                {
                    data: 'jumlah_mahasiswa_asing_paruh_waktu_ts_1',
                    name: 'jumlah_mahasiswa_asing_paruh_waktu_ts_1'
                },
                {
                    data: 'jumlah_mahasiswa_asing_paruh_waktu_ts',
                    name: 'jumlah_mahasiswa_asing_paruh_waktu_ts'
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