@extends('layouts.master-layouts')
@section('title')
Dosen Tidak Tetap
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Dosen Tidak Tetap @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-a-4.create') }}" class="text-white">Tambah</a>
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
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIDN/NIDK</th>
                                <th>Pendidikan Pasca Sarjana</th>
                                <th>Bidang Keahlian</th>
                                <th>Jabatan Akademik</th>
                                <th>Sertifikat Pendidik Profesional</th>
                                <th>Sertifikat  Kompetensi/Profesi/Industri : </th>
                                <th>Mata Kuliah yang Diampu pada PS yang Diakreditasi : </th>
                                <th>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu : </th>
                                <th>Aksi</th>
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
            ajax: "{{ url('/tabel-3-a-4') }}",
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
                    data: 'pendidikan_pasca_parjana',
                    name: 'pendidikan_pasca_parjana'
                },
                {
                    data: 'bidang_keahlian',
                    name: 'bidang_keahlian'
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
                    data: 'sertifikat_kompetensi',
                    name: 'sertifikat_kompetensi'
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