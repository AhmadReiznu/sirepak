<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_A_4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_A_4_Controller extends Controller
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
            $tabel_3_a_4 = new Tabel_3_A_4;
            $tabel_3_a_4->nama_dosen = $request->nama_dosen;
            $tabel_3_a_4->nidn = $request->nidn;
            $tabel_3_a_4->pendidikan_pasca_parjana = $request->pendidikan_pasca_parjana;
            $tabel_3_a_4->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_4->jabatan_akademik = $request->jabatan_akademik;
            $tabel_3_a_4->sertifikat_pendidik_profesional = $request->sertifikat_pendidik_profesional;
            $tabel_3_a_4->sertifikat_kompetensi = $request->sertifikat_kompetensi;
            $tabel_3_a_4->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi = $request->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi;
            $tabel_3_a_4->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu = $request->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu;
            $tabel_3_a_4->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-a-4');
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
        $rules = [];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_a_4 = Tabel_3_A_4::find($id);
            $tabel_3_a_4->nama_dosen = $request->nama_dosen;
            $tabel_3_a_4->nidn = $request->nidn;
            $tabel_3_a_4->pendidikan_pasca_parjana = $request->pendidikan_pasca_parjana;
            $tabel_3_a_4->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_4->jabatan_akademik = $request->jabatan_akademik;
            $tabel_3_a_4->sertifikat_pendidik_profesional = $request->sertifikat_pendidik_profesional;
            $tabel_3_a_4->sertifikat_kompetensi = $request->sertifikat_kompetensi;
            $tabel_3_a_4->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi = $request->mata_kuliah_yang_diampu_pada_ps_yang_diakreditasi;
            $tabel_3_a_4->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu = $request->kesesuaian_bidang_keahlian_dengan_mata_kuliah_yang_diampu;
            $tabel_3_a_4->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-a-4');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_a_4 = Tabel_3_A_4::find($id);
        $tabel_3_a_4->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-a-4');
    }
}
