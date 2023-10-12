@extends('layouts.master-layouts')
@section('title')
Produk/Jasa DTPS yang Dihasilkan Mahasiswa
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Produk/Jasa DTPS yang Dihasilkan Mahasiswa @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-8-f-3.create') }}" class="text-white">Tambah</a>
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
                                <th>Nama Mahasiswa</th>
                                <th>Nama Produk/Jasa</th>
                                <th>Deskripsi Produk/Jasa</th>
                                <th>Bukti</th>
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
            ajax: "{{ url('/tabel-8-f-3') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'nama_mahasiswa',
                    name: 'nama_mahasiswa'
                },
                {
                    data: 'nama_produk_jasa',
                    name: 'nama_produk_jasa'
                },
                {
                    data: 'deskripsi_produk_jasa',
                    name: 'deskripsi_produk_jasa'
                },
                {
                    data: 'bukti',
                    name: 'bukti'
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