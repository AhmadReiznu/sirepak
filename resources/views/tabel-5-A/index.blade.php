@extends('layouts.master-layouts')
@section('title')
Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-5-a.create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="data-table table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th rowspan="2" class="text-center">Semester</th>
                                <th rowspan="2" class="text-center">Kode Mata Kuliah</th>
                                <th rowspan="2" class="text-center">Nama Mata Kuliah</th>
                                <th rowspan="2" class="text-center">Mata Kuliah Kompetensi</th>
                                <th colspan="3" class="text-center">Bobot Kredit (sks)</th>
                                <th rowspan="2" class="text-center">Konversi Kredit ke Jam</th>
                                <th colspan="4" class="text-center">Capaian Pembelajaran</th>
                                <th rowspan="2" class="text-center">Dokumen Rencana Pembelajaran</th>
                                <th rowspan="2" class="text-center">Unit Penyelenggara</th>
                                <th rowspan="2" class="text-center">Aksi</th>
                            </tr>
                            <tr>
                                <th>Kuliah/Responsi/Tutorial</th>
                                <th>Seminar</th>
                                <th>Praktikum/Praktik/Praktik Lapangan</th>
                                <th>Sikap</th>
                                <th>Pengetahuan</th>
                                <th>Keterampilan Umum</th>
                                <th>Keterampilan Khusus</th>
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
            ajax: "{{ url('/tabel-5-a') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'semester',
                    name: 'semester'
                },
                {
                    data: 'kode_mata_kuliah',
                    name: 'kode_mata_kuliah'
                },
                {
                    data: 'nama_mata_kuliah',
                    name: 'nama_mata_kuliah'
                },
                {
                    data: 'mata_kuliah_kompetensi',
                    name: 'mata_kuliah_kompetensi'
                },
                {
                    data: 'sks_kuliah',
                    name: 'sks_kuliah'
                },
                {
                    data: 'sks_seminar',
                    name: 'sks_seminar'
                },
                {
                    data: 'sks_praktikum',
                    name: 'sks_praktikum'
                },
                {
                    data: 'konversi_kredit_ke_jam',
                    name: 'konversi_kredit_ke_jam'
                },
                {
                    data: 'capaian_pembelajaran_sikap',
                    name: 'capaian_pembelajaran_sikap'
                },
                {
                    data: 'capaian_pembelajaran_pengetahuan',
                    name: 'capaian_pembelajaran_pengetahuan'
                },
                {
                    data: 'capaian_pembelajaran_keterampilan_umum',
                    name: 'capaian_pembelajaran_keterampilan_umum'
                },
                {
                    data: 'capaian_pembelajaran_keterampilan_khusus',
                    name: 'capaian_pembelajaran_keterampilan_khusus'
                },
                {
                    data: 'dokumen_rencana_pembelajaran',
                    name: 'dokumen_rencana_pembelajaran'
                },
                {
                    data: 'unit_penyelenggara',
                    name: 'unit_penyelenggara'
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