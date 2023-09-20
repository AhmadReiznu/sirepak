<?php

namespace App\Http\Controllers;

use App\Models\Tabel11;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel1Controller extends Controller
{
    public function index()
    {
        $tabels11 = Tabel11::all();
        return view('logic-test.index', compact('tabels11'));
    }

    public function create()
    {
        return view('logic-test.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'lembaga_mitra' => 'required',
            'tingkat' => 'required',
            'judul_kegiatan_kerjasama' => 'required',
            'manfaat_bagi_ps_yang_diakreditasi' => 'required',
            'waktu_dan_durasi' => 'required',
            'bukti_kerjasama' => 'required',
            'tahun_berakhirnya_kerjasama' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel11 = new Tabel11;
            $tabel11->lembaga_mitra = $request->lembaga_mitra;
            $tabel11->tingkat = $request->tingkat;
            $tabel11->judul_kegiatan_kerjasama = $request->judul_kegiatan_kerjasama;
            $tabel11->manfaat_bagi_ps_yang_diakreditasi = $request->manfaat_bagi_ps_yang_diakreditasi;
            $tabel11->waktu_dan_durasi = $request->waktu_dan_durasi;
            $tabel11->bukti_kerjasama = $request->bukti_kerjasama;
            $tabel11->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel11->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('logic-testing');
        }
    }
}
