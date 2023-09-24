<h1>Test</h1>
<a href="{{ url('/logic-testing/create') }}">Add</a>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Lembaga Mitra</th>
            <th colspan="3">Tingkat *</th>
            <th rowspan="2">Judul Kegiatan Kerjasama</th>
            <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
            <th rowspan="2">Waktu dan Durasi</th>
            <th rowspan="2">Bukti Kerjasama</th>
            <th rowspan="2">Tahun Berakhirnya Kerjasama (YYYY)</th>
        </tr>
        <tr>
            <th>Interna-sional</th>
            <th>Nasional</th>
            <th>Wilayah/ Lokal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tabels11 as $tabel)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tabel->lembaga_mitra }}</td>
            <td>{{ $tabel->tingkat == 'internasional' ? 'X' : '' }}</td>
            <td>{{ $tabel->tingkat == 'nasional' ? 'X' : '' }}</td>
            <td>{{ $tabel->tingkat == 'lokal' ? 'X' : '' }}</td>
            <td>{{ $tabel->judul_kegiatan_kerjasama }}</td>
            <td>{{ $tabel->manfaat_bagi_ps_yang_diakreditasi }}</td>
            <td>{{ $tabel->waktu_dan_durasi }}</td>
            <td>{{ $tabel->bukti_kerjasama }}</td>
            <td>{{ $tabel->tahun_berakhirnya_kerjasama }}</td>
        </tr>
        @endforeach
    </tbody>
</table>