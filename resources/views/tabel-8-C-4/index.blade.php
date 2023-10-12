@extends('layouts.master-layouts')
@section('title')
Masa Studi Lulusan
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Masa Studi Lulusan @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-8-c-4.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2">Tahun Akademik</th>
                                <th rowspan="2">Jumlah Mahasiswa Diterima</th>
                                <th colspan="7" class="text-center">Jumlah Mahasiswa Yang Lulus Pada</th>
                                <th rowspan="2">Jumlah Lulusan s.d. akhir TS : </th>
                                <th rowspan="2">Rata-rata Masa Studi : </th>
                                <th rowspan="2">Aksi</th>
                            </tr>

                            <tr>
                                <th>Akhir TS-6</th>
                                <th>Akhir TS-5</th>
                                <th>Akhir TS-4</th>
                                <th>Akhir TS-3</th>
                                <th>Akhir TS-2</th>
                                <th>Akhir TS-1</th>
                                <th>Akhir TS</th>
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
            ajax: "{{ url('/tabel-8-c-4') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'tahun_masuk',
                    name: 'tahun_masuk',
                    render: function (data, type, row) {
                        if (type === 'display') {
                            // Mengonversi teks menjadi huruf kapital (uppercase)
                            return data.toUpperCase();
                        }
                        return data;
                    },
                },
                {
                    data: 'jumlah_mahasiswa_diterima',
                    name: 'jumlah_mahasiswa_diterima'
                },
                {
                    data: 'jml_akhir_ts_6',
                    name: 'jml_akhir_ts_6'
                },
                {
                    data: 'jml_akhir_ts_5',
                    name: 'jml_akhir_ts_5'
                },
                {
                    data: 'jml_akhir_ts_4',
                    name: 'jml_akhir_ts_4'
                },
                {
                    data: 'jml_akhir_ts_3',
                    name: 'jml_akhir_ts_3'
                },
                {
                    data: 'jml_akhir_ts_2',
                    name: 'jml_akhir_ts_2'
                },
                {
                    data: 'jml_akhir_ts_1',
                    name: 'jml_akhir_ts_1'
                },
                {
                    data: 'jml_akhir_ts',
                    name: 'jml_akhir_ts'
                },
                {
                    data: 'jumlah_lulusan__akhir_ts',
                    name: 'jumlah_lulusan__akhir_ts'
                },
                {
                    data: 'rata_rata_masa_studi',
                    name: 'rata_rata_masa_studi'
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