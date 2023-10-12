@extends('layouts.master-layouts')
@section('title')
Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-a-3.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="3">No</th>
                                <th rowspan="3">Nama Dosen</th>
                                <th rowspan="3">DTPS</th>
                                <th colspan="6" class="text-center">Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                                <th rowspan="3">Jumlah (sks) : </th>
                                <th rowspan="3">Rata-rata per Semester (sks) : </th>
                                <th rowspan="3">Aksi</th>
                                
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Pendidikan: Pembelajaran dan Pembimbingan</th>
                                <th rowspan="2">Penelitian</th>
                                <th rowspan="2">PkM</th>
                                <th rowspan="2">Tugas Tambahan dan/atau Penunjang : </th>
                            </tr>
                            <tr>
                                <th>PS yang Diakreditasi</th>
                                <th>PS Lain di dalam PT</th>
                                <th>PS Lain di luar PT</th>
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
            ajax: "{{ url('/tabel-3-a-3') }}",
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
                    data: 'dtps',
                    name: 'dtps'
                },
                {
                    data: 'ewmp_pendidikan_ps_yang_diakreditasi',
                    name: 'ewmp_pendidikan_ps_yang_diakreditasi'
                },
                {
                    data: 'ewmp_pendidikan_ps_lain_di_dalam_pt',
                    name: 'ewmp_pendidikan_ps_lain_di_dalam_pt'
                },
                {
                    data: 'ewmp_pendidikan_ps_lain_di_luar_pt',
                    name: 'ewmp_pendidikan_ps_lain_di_luar_pt'
                },
                {
                    data: 'ewmp_penelitian',
                    name: 'ewmp_penelitian'
                },
                {
                    data: 'ewmp_pkm',
                    name: 'ewmp_pkm'
                },
                {
                    data: 'ewmp_tugas_tambahan',
                    name: 'ewmp_tugas_tambahan'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah'
                },
                {
                    data: 'rata_rata_per_semester',
                    name: 'rata_rata_per_semester'
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