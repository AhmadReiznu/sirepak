@extends('layouts.master-layouts')
@section('title')
Dosen Industri/Praktisi
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Dosen Industri/Praktisi @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-a-5.create') }}" class="text-white">Tambah</a>
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
                                <th>NIDK</th>
                                <th>Perusahaan/Industri</th>
                                <th>Pendidikan Tertinggi</th>
                                <th>Bidang Keahlian</th>
                                <th>Sertifikat Profesi/Kompetensi/Industri</th>
                                <th>Mata Kuliah yang Diampu : </th>
                                <th>Bobot Kredit (sks) : </th>
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
            ajax: "{{ url('/tabel-3-a-5') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'nama_dosen_industri',
                    name: 'nama_dosen_industri'
                },
                {
                    data: 'nidk',
                    name: 'nidk'
                },
                {
                    data: 'perusahaan',
                    name: 'perusahaan'
                },
                {
                    data: 'pendidikan_tertinggi',
                    name: 'pendidikan_tertinggi'
                },
                {
                    data: 'bidang_keahlian',
                    name: 'bidang_keahlian'
                },
                {
                    data: 'sertifikat_profesi',
                    name: 'sertifikat_profesi'
                },
                {
                    data: 'mata_kuliah_yang_diampu',
                    name: 'mata_kuliah_yang_diampu'
                },
                {
                    data: 'sks',
                    name: 'sks'
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