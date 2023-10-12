@extends('layouts.master-layouts')
@section('title')
Tempat Kerja Lulusan
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Tempat Kerja Lulusan @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-8-e-1.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2">Tahun Lulus</th>
                                <th colspan="3" class="text-center">Jumlah Lulusan Terlacak yang Bekerja Berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
                                <th rowspan="2">Jumlah Lulusan</th>
                                <th rowspan="2">Jumlah Lulusan yang Terlacak</th>
                                <th rowspan="2">Aksi</th>
                            </tr>

                            <tr>
                                <th>Lokal/Wilayah/Berwirausaha tidak Berbadan Hukum</th>
                                <th>Nasional/Berwirausaha Berbadan Hukum</th>
                                <th>Multinasiona/Internasional</th>
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
            ajax: "{{ url('/tabel-8-e-1') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'tahun_lulus',
                    name: 'tahun_lulus',
                    render: function (data, type, row) {
                        if (type === 'display') {
                            // Mengonversi teks menjadi huruf kapital (uppercase)
                            return data.toUpperCase();
                        }
                        return data;
                    },
                },
                {
                    data: 'jltbbt_lokal',
                    name: 'jltbbt_lokal'
                },
                {
                    data: 'jltbbt_nasional',
                    name: 'jltbbt_nasional'
                },
                {
                    data: 'jltbbt_multinasional',
                    name: 'jltbbt_multinasional'
                },
                {
                    data: 'jumlah_lulusan',
                    name: 'jumlah_lulusan'
                },
                {
                    data: 'jumlah_lulusan_yang_terlacak',
                    name: 'jumlah_lulusan_yang_terlacak'
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