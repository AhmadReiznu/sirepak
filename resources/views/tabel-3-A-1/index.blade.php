@extends('layouts.master-layouts')
@section('title')
Dosen Tetap Perguruan Tinggi
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Dosen Tetap Perguruan Tinggi @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-a-1.create') }}" class="text-white">Tambah</a>
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
                                <th rowspan="2">Nama Dosen</th>
                                <th rowspan="2">NIDN/NIDK</th>
                                <th colspan="2" class="text-center">Pendidikan Pasca Sarjana</th>
                                <th rowspan="2">Bidang Keahlian</th>
                                <th rowspan="2">Kesesuaian Dengan Kompetensi Inti PS : </th>
                                <th rowspan="2">Jabatan Akademik : </th>
                                <th rowspan="2">Sertifikat Pendidik Profesional : </th>
                                <th rowspan="2">Sertifikat Kompetensi/Profesi/Industri : </th>
                                <th rowspan="2">Mata Kuliah yang Diampu pada PS yang Diakreditasi : </th>
                                <th rowspan="2">Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu : </th>
                                <th rowspan="2">Mata Kuliah yang Diampu pada PS Lain : </th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Magister/Magister Terapan/Spesialis</th>
                                <th>Doktor/Doktor Terapan/Spesialis</th>
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
            ajax: "{{ url('/tabel-3-a-1') }}",
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
                    data: 'nidn',
                    name: 'nidn'
                },
                {
                    data: 'pendidikan_pasca_sarjana_magister',
                    name: 'pendidikan_pasca_sarjana_magister'
                },
                {
                    data: 'pendidikan_pasca_sarjana_doktor',
                    name: 'pendidikan_pasca_sarjana_doktor'
                },
                {
                    data: 'bidang_keahlian',
                    name: 'bidang_keahlian'
                },
                {
                    data: 'kesesuaian_dengan_kompetensi_inti_ps',
                    name: 'kesesuaian_dengan_kompetensi_inti_ps',
                        render: function(data, type, row) {
                        return data == 1 ? 'V' : '-';
                    }
                },
                {
                    data: 'jabatan_akademik',
                    name: 'jabatan_akademik'
                },
                {
                    data: 'sertifikat_pendidik_profesional',
                    name: 'sertifikat_pendidik_profesional'
                },
                {
                    data: 'sertifikat_kompetensi_profesi_industri',
                    name: 'sertifikat_kompetensi_profesi_industri'
                },
                {
                    data: 'mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi',
                    name: 'mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi'
                },
                {
                    data: 'kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu',
                    name: 'kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu'
                },
                {
                    data: 'mata_kuliah_yang_diampu_pada_ps_lain',
                    name: 'mata_kuliah_yang_diampu_pada_ps_lain'
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