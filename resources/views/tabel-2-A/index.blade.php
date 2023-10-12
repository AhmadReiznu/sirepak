@extends('layouts.master-layouts')
@section('title')
Seleksi Mahasiswa
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Seleksi Mahasiswa @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-2-a.create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="data-table text-center table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Tahun Akademik</th>
                                <th rowspan="2">Daya Tampung</th>
                                <th colspan="2">Jumlah Calon Mahasiswa</th>
                                <th colspan="2">Jumlah Mahasiswa Baru</th>
                                <th colspan="2">Jumlah Mahasiswa Aktif</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Pendaftar</th>
                                <th>Lulus Seleksi</th>
                                <th>Reguler</th>
                                <th>Transfer</th>
                                <th>Reguler</th>
                                <th>Transfer</th>
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
            ajax: "{{ url('/tabel-2-a') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'tahun_akademik',
                    name: 'tahun_akademik'
                },
                {
                    data: 'daya_tampung',
                    name: 'daya_tampung'
                },
                {
                    data: 'jumlah_calon_mahasiswa_pendaftar',
                    name: 'jumlah_calon_mahasiswa_pendaftar'
                },
                {
                    data: 'jumlah_calon_mahasiswa_lulus_seleksi',
                    name: 'jumlah_calon_mahasiswa_lulus_seleksi'
                },
                {
                    data: 'jumlah_mahasiswa_baru_reguler',
                    name: 'jumlah_mahasiswa_baru_reguler'
                },
                {
                    data: 'jumlah_mahasiswa_baru_transfer',
                    name: 'jumlah_mahasiswa_baru_transfer'
                },
                {
                    data: 'jumlah_mahasiswa_aktif_reguler',
                    name: 'jumlah_mahasiswa_aktif_reguler'
                },
                {
                    data: 'jumlah_mahasiswa_aktif_transfer',
                    name: 'jumlah_mahasiswa_aktif_transfer'
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