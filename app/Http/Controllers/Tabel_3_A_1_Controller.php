<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_A_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_A_1_Controller extends Controller
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
            'nama_dosen' => 'required',
            'nidn' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_a_1 = new Tabel_3_A_1;
            $tabel_3_a_1->nama_dosen = $request->nama_dosen;
            $tabel_3_a_1->nidn = $request->nidn;
            $tabel_3_a_1->pendidikan_pasca_sarjana_magister = $request->pendidikan_pasca_sarjana_magister;
            $tabel_3_a_1->pendidikan_pasca_sarjana_doktor = $request->pendidikan_pasca_sarjana_doktor;
            $tabel_3_a_1->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_1->kesesuaian_dengan_kompetensi_inti_ps = $request->kesesuaian_dengan_kompetensi_inti_ps;
            $tabel_3_a_1->jabatan_akademik = $request->jabatan_akademik;
            $tabel_3_a_1->sertifikat_pendidik_profesional = $request->sertifikat_pendidik_profesional;
            $tabel_3_a_1->sertifikat_kompetensi_profesi_industri = $request->sertifikat_kompetensi_profesi_industri;
            $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi = $request->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi;
            $tabel_3_a_1->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu = $request->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu;
            $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_lain = $request->mata_kuliah_yang_diampu_pada_ps_lain;
            $tabel_3_a_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-a-1');
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
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'nidn' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_a_1 = Tabel_3_A_1::find($id);
            $tabel_3_a_1->nama_dosen = $request->nama_dosen;
            $tabel_3_a_1->nidn = $request->nidn;
            $tabel_3_a_1->pendidikan_pasca_sarjana_magister = $request->pendidikan_pasca_sarjana_magister;
            $tabel_3_a_1->pendidikan_pasca_sarjana_doktor = $request->pendidikan_pasca_sarjana_doktor;
            $tabel_3_a_1->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_1->kesesuaian_dengan_kompetensi_inti_ps = $request->kesesuaian_dengan_kompetensi_inti_ps;
            $tabel_3_a_1->jabatan_akademik = $request->jabatan_akademik;
            $tabel_3_a_1->sertifikat_pendidik_profesional = $request->sertifikat_pendidik_profesional;
            $tabel_3_a_1->sertifikat_kompetensi_profesi_industri = $request->sertifikat_kompetensi_profesi_industri;
            $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi = $request->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi;
            $tabel_3_a_1->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu = $request->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu;
            $tabel_3_a_1->mata_kuliah_yang_diampu_pada_ps_lain = $request->mata_kuliah_yang_diampu_pada_ps_lain;
            $tabel_3_a_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-a-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_a_1 = Tabel_3_A_1::find($id);
        $tabel_3_a_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-a-1');
    }
}
