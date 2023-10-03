@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ url('/logic-testing/'. $tabel_1_1->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <table>
        <tr>
            <td>Lembaga</td>
            <td><input type="text" name="lembaga_mitra" value="{{ $tabel_1_1->lembaga_mitra }}"></td>
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
            <td><input type="text" name="judul_kegiatan_kerjasama" value="{{ $tabel_1_1->judul_kegiatan_kerjasama }}"></td>
        </tr>
        <tr>
            <td>Manfaat</td>
            <td><input type="text" name="manfaat_bagi_ps_yang_diakreditasi" value="{{ $tabel_1_1->manfaat_bagi_ps_yang_diakreditasi }}"></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type="text" name="waktu_dan_durasi" value="{{ $tabel_1_1->waktu_dan_durasi }}"></td>
        </tr>
        <tr>
            <td>Bukti</td>
            <td><input type="file" name="bukti_kerjasama"></td>
            <input type="hidden" name="current_document" value="{{ $tabel_1_1->bukti_kerjasama }}">
        </tr>
        <tr>
            <td>Tahun</td>
            <td><input type="text" name="tahun_berakhirnya_kerjasama" value="{{ $tabel_1_1->tahun_berakhirnya_kerjasama }}"></td>
        </tr>
        <tr>
            <td><button type="submit">Ubah</button></td>
        </tr>
    </table>
</form>