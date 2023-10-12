@extends('layouts.master-layouts')
@section('title')
Pengakuan/Rekognisi DTPS
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Pengakuan/Rekognisi DTPS @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-b-1.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2" class="text-center">Nama Dosen</th>
                                <th rowspan="2" class="text-center">Bidang Keahlian</th>
                                <th rowspan="2" class="text-center">Rekognisi dan Bukti Pendukung</th>
                                <th colspan="3" class="text-center">Tingkat</th>
                                <th rowspan="2" class="text-center">Tahun<br>(YYYY)</th>
                                <th rowspan="2" class="text-center">Aksi</th>
                            </tr>
                            <tr>
                                <th>Wilayah</th>
                                <th>Nasional</th>
                                <th>Internasional</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
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
            ajax: "{{ url('/tabel-3-b-1') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'nama_dosen',
                    name: 'nama_dosen'
                },
                {
                    data: 'bidang_keahlian',
                    name: 'bidang_keahlian'
                },
                {
                    data: 'rekognisi_dan_bukti_pendukung',
                    name: 'rekognisi_dan_bukti_pendukung'
                },
                {
                    data: 'wilayah',
                    name: 'wilayah'
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
                    data: 'tahun',
                    name: 'tahun'
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