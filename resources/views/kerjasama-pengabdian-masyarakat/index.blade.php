@extends('layouts.master-layouts')
@section('title')
Kerjasama
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kerjasama @endslot
@slot('title') Kerjasama Pengabdian Masyarakat @endslot
@endcomponent

<button class="btn btn-success mb-4">
    <a href="{{ Route('tabel-1-3.create') }}" class="text-white">Tambah</a>
</button>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tbody>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Lembaga</th>
                                <th colspan="3">Tingkat</th>
                                <th rowspan="2">Judul Kegiatan Kerjasama</th>
                                <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                                <th rowspan="2">Waktu dan Durasi</th>
                                <th rowspan="2">Bukti Kerjasama</th>
                                <th rowspan="2">Tahun Berakhirnya Kerjasama</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <th>Internasional</th>
                                <th>Nasional</th>
                                <th>Wilayah/Lokal</th>
                            </tr>
                            @foreach ($tabels13 as $tabel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tabel->lembaga_mitra }}</td>
                                <td>{{ $tabel->tingkat == 'internasional' ? 'X' : '' }}</td>
                                <td>{{ $tabel->tingkat == 'nasional' ? 'X' : '' }}</td>
                                <td>{{ $tabel->tingkat == 'lokal' ? 'X' : '' }}</td>
                                <td>{{ $tabel->judul_kegiatan_kerjasama }}</td>
                                <td>{{ $tabel->manfaat_bagi_ps_yang_diakreditasi }}</td>
                                <td>{{ $tabel->waktu_dan_durasi }}</td>
                                <td><a href="{{ asset('dokumen/'.$tabel->bukti_kerjasama) }}" target="_blank">Lihat/Download</a></td>
                                <td>{{ $tabel->tahun_berakhirnya_kerjasama }}</td>
                                <td>
                                    <a href="{{ route('tabel-1-3.edit', $tabel->id) }}">
                                        <span class="badge bg-info">Ubah</span>
                                    </a>
                                    <form action="{{ route('tabel-1-3.destroy', $tabel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger outline-0 border-0">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
@endsection