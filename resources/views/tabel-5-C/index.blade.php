@extends('layouts.master-layouts')
@section('title')
Kepuasan Mahasiswa
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Kepuasan Mahasiswa @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-5-c.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2">Aspek yang Diukur</th>
                                <th colspan="4" class="text-center">Tingkat Kepuasan Mahasiswa<br>(%)</th>
                                <th rowspan="2">Rencana Tindak Lanjut oleh UPPS/PS</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Sangat Baik</th>
                                <th>Baik</th>
                                <th>Cukup</th>
                                <th>Kurang</th>
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
            ajax: "{{ url('/tabel-5-c') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'aspek_yang_diukur',
                    name: 'aspek_yang_diukur'
                },
                {
                    data: 'tkm_sangat_baik',
                    name: 'tkm_sangat_baik'
                },
                {
                    data: 'tkm_baik',
                    name: 'tkm_baik'
                },
                {
                    data: 'tkm_cukup',
                    name: 'tkm_cukup'
                },
                {
                    data: 'tkm_kurang',
                    name: 'tkm_kurang'
                },
                {
                    data: 'rencana_tindak_lanjut_oleh_ps',
                    name: 'rencana_tindak_lanjut_oleh_ps'
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