@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ url('/logic-testing') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Lembaga</td>
            <td><input type="text" name="lembaga_mitra"></td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td><select name="tingkat">
                    <option value="lokal">Lokal</option>
                    <option value="nasional">Nasional</option>
                    <option value="internasional">Internasional</option>
                </select></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul_kegiatan_kerjasama"></td>
        </tr>
        <tr>
            <td>Manfaat</td>
            <td><input type="text" name="manfaat_bagi_ps_yang_diakreditasi"></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type="text" name="waktu_dan_durasi"></td>
        </tr>
        <tr>
            <td>Bukti</td>
            <td><input type="text" name="bukti_kerjasama"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td><input type="text" name="tahun_berakhirnya_kerjasama"></td>
        </tr>
        <tr>
            <td><button type="submit">Tambahkan</button></td>
        </tr>
    </table>
</form>