<h1>Test</h1>
<a href="{{ url('/logic-testing/create') }}">Add</a>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>jenis_penggunaan</th>
            <th>unit_pengelola_program_studi_ts_2</th>
            <th>unit_pengelola_program_studi_ts_1</th>
            <th>unit_pengelola_program_studi_ts</th>
            <th>rata_rata_1</th>
            <th>program_studi_ts_2</th>
            <th>program_studi_ts_1</th>
            <th>program_studi_ts</th>
            <th>rata_rata_2</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tabel_4s as $tabel_4)
        <tr>
            <td>{{ $tabel_4->jenis_penggunaan }}</td>
            <td>{{ $tabel_4->unit_pengelola_program_studi_ts_2 }}</td>
            <td>{{ $tabel_4->unit_pengelola_program_studi_ts_1 }}</td>
            <td>{{ $tabel_4->unit_pengelola_program_studi_ts }}</td>
            <td>{{ $tabel_4->rata_rata_1 }}</td>
            <td>{{ $tabel_4->program_studi_ts_2 }}</td>
            <td>{{ $tabel_4->program_studi_ts_1 }}</td>
            <td>{{ $tabel_4->program_studi_ts }}</td>
            <td>{{ $tabel_4->rata_rata_2 }}</td>
            <td>
                <a href="{{ url('/logic-testing/edit/'.$tabel_4->id) }}">edit</a>
                <a href="{{ url('/logic-testing/delete/'.$tabel_4->id) }}">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>