@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ url('/logic-testing/'.$tabel_4->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <table>
        <tr>
            <td>jenis_penggunaan</td>
            <td><input type="text" name="jenis_penggunaan" value="{{ $tabel_4->jenis_penggunaan }}"></td>
        </tr>
        <tr>
            <td>unit_pengelola_program_studi_ts_2</td>
            <td><input type="number" name="unit_pengelola_program_studi_ts_2" value="{{ $tabel_4->unit_pengelola_program_studi_ts_2 }}"></td>
        </tr>
        <tr>
            <td>unit_pengelola_program_studi_ts_1</td>
            <td><input type="number" step="0.01" name="unit_pengelola_program_studi_ts_1" value="{{ $tabel_4->unit_pengelola_program_studi_ts_1 }}"></td>
        </tr>
        <tr>
            <td>unit_pengelola_program_studi_ts</td>
            <td><input type="number" name="unit_pengelola_program_studi_ts" value="{{ $tabel_4->unit_pengelola_program_studi_ts }}"></td>
        </tr>
        <tr>
            <td>program_studi_ts_2</td>
            <td><input type="number" name="program_studi_ts_2" value="{{ $tabel_4->program_studi_ts_2 }}"></td>
        </tr>
        <tr>
            <td>program_studi_ts_1</td>
            <td><input type="number" name="program_studi_ts_1" value="{{ $tabel_4->program_studi_ts_1 }}"></td>
        </tr>
        <tr>
            <td>program_studi_ts</td>
            <td><input type="number" name="program_studi_ts" value="{{ $tabel_4->program_studi_ts }}"></td>
        </tr>
        <tr>
            <td><button type="submit">Tambahkan</button></td>
        </tr>
    </table>
</form>