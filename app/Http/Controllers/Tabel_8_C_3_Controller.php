<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_C_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_C_3_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'tahun_masuk' => 'required',
            'jumlah_mahasiswa_diterima' => 'required|integer',
            'jml_akhir_ts_3' => 'required|integer',
            'jml_akhir_ts_2' => 'required|integer',
            'jml_akhir_ts_1' => 'required|integer',
            'jml_akhir_ts' => 'required|integer',
            'jumlah_lulusan__akhir_ts' => 'required|integer',
            'rata_rata_masa_studi' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_c_3 = new Tabel_8_C_3;
            $tabel_8_c_3->tahun_masuk = $request->tahun_masuk;
            $tabel_8_c_3->jumlah_mahasiswa_diterima = $request->jumlah_mahasiswa_diterima;
            $tabel_8_c_3->jml_akhir_ts_3 = $request->jml_akhir_ts_3;
            $tabel_8_c_3->jml_akhir_ts_2 = $request->jml_akhir_ts_2;
            $tabel_8_c_3->jml_akhir_ts_1 = $request->jml_akhir_ts_1;
            $tabel_8_c_3->jml_akhir_ts = $request->jml_akhir_ts;
            $tabel_8_c_3->jumlah_lulusan__akhir_ts =
                $request->jml_akhir_ts_3 +
                $request->jml_akhir_ts_2 +
                $request->jml_akhir_ts_1 +
                $request->jml_akhir_ts;
            $tabel_8_c_3->rata_rata_masa_studi = $request->rata_rata_masa_studi;
            $tabel_8_c_3->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-c-3');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'tahun_masuk' => 'required',
            'jumlah_mahasiswa_diterima' => 'required|integer',
            'jml_akhir_ts_3' => 'required|integer',
            'jml_akhir_ts_2' => 'required|integer',
            'jml_akhir_ts_1' => 'required|integer',
            'jml_akhir_ts' => 'required|integer',
            'jumlah_lulusan__akhir_ts' => 'required|integer',
            'rata_rata_masa_studi' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_c_3 = Tabel_8_C_3::find($id);
            $tabel_8_c_3->tahun_masuk = $request->tahun_masuk;
            $tabel_8_c_3->jumlah_mahasiswa_diterima = $request->jumlah_mahasiswa_diterima;
            $tabel_8_c_3->jml_akhir_ts_3 = $request->jml_akhir_ts_3;
            $tabel_8_c_3->jml_akhir_ts_2 = $request->jml_akhir_ts_2;
            $tabel_8_c_3->jml_akhir_ts_1 = $request->jml_akhir_ts_1;
            $tabel_8_c_3->jml_akhir_ts = $request->jml_akhir_ts;
            $tabel_8_c_3->jumlah_lulusan__akhir_ts =
                $request->jml_akhir_ts_3 +
                $request->jml_akhir_ts_2 +
                $request->jml_akhir_ts_1 +
                $request->jml_akhir_ts;
            $tabel_8_c_3->rata_rata_masa_studi = $request->rata_rata_masa_studi;
            $tabel_8_c_3->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-c-3');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_c_3 = Tabel_8_C_3::find($id);
        $tabel_8_c_3->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-c-3');
    }
}
