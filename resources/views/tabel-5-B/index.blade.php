@extends('layouts.master-layouts')
@section('title')
Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-5-b.create') }}" class="text-white">Tambah</a>
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
                                <th>Judul Penelitian/PkM</th>
                                <th>Nama Dosen</th>
                                <th>Mata Kuliah</th>
                                <th>Bentuk Imigrasi</th>
                                <th>Tahun<br>(YYYY)</th>
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
            ajax: "{{ url('/tabel-5-b') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'judul_penelitian_pkm',
                    name: 'judul_penelitian_pkm'
                },
                {
                    data: 'nama_dosen',
                    name: 'nama_dosen'
                },
                {
                    data: 'mata_kuliah',
                    name: 'mata_kuliah'
                },
                {
                    data: 'bentuk_integrasi',
                    name: 'bentuk_integrasi'
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