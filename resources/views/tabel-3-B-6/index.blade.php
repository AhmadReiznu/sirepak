@extends('layouts.master-layouts')
@section('title')
Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-b-6.create') }}" class="text-white">Tambah</a>
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
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Dosen</th>
                                <th class="text-center">Nama Produk/Jasa</th>
                                <th class="text-center">Deskripsi Produk/Jasa</th>
                                <th class="text-center">Bukti</th>
                                <th class="text-center">Tahun<br>(YYYY)</th>
                                <th class="text-center">Aksi</th>
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
            ajax: "{{ url('/tabel-3-b-6') }}",
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