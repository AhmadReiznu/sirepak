@extends('layouts.master-layouts')
@section('title')
Dosen Pembimbing Utama Tugas Akhir
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Dashboard @endslot
@slot('title') Dosen Pembimbing Utama Tugas Akhir @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ route('tabel-3-a-2.create') }}" class="text-white">Tambah</a>
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
                                <th colspan="8" class="text-center">Jumlah Mahasiswa Yang Dibimbing</th>
                                <th rowspan="3">Rata-rata Jumlah Bimbingan di semua Program/Semester :</th>
                                <th rowspan="3">Aksi</th>
                                
                            </tr>
                            <tr>
                                <th colspan="4">Pada PS Yang Diakreditasi</th>
                                <th colspan="4">Pada PS Lain di PT</th>
                            </tr>
                            <tr>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
                                <th>Rata-Rata</th>
                                <th>TS-2</th>
                                <th>TS-1</th>
                                <th>TS</th>
                                <th>Rata-Rata</th>
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
            ajax: "{{ url('/tabel-3-a-2') }}",
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
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2'
                },
                {
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1'
                },
                {
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts'
                },
                {
                    data: 'rata_rata_1',
                    name: 'rata_rata_1'
                },
                {
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2'
                },
                {
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1'
                },
                {
                    data: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts',
                    name: 'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts'
                },
                {
                    data: 'rata_rata_2',
                    name: 'rata_rata_2'
                },
                {
                    data: 'rata_rata_jumlah_bimbingan_di_semua_program_semester',
                    name: 'rata_rata_jumlah_bimbingan_di_semua_program_semester'
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