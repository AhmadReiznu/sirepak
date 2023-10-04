<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_A_5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_A_5_Controller extends Controller
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
            'nama_dosen_ndustri' => 'required',
            'perusahaan' => 'required',
            'pendidikan_tertinggi' => 'required',
            'bidang_keahlian' => 'required',
            'mata_kuliah_yang_diampu' => 'required',
            'sks' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_a_5 = new Tabel_3_A_5;
            $tabel_3_a_5->nama_dosen_ndustri = $request->nama_dosen_ndustri;
            $tabel_3_a_5->nidk = $request->nidk;
            $tabel_3_a_5->perusahaan = $request->perusahaan;
            $tabel_3_a_5->pendidikan_tertinggi = $request->pendidikan_tertinggi;
            $tabel_3_a_5->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_5->sertifikat_profesi = $request->sertifikat_profesi;
            $tabel_3_a_5->mata_kuliah_yang_diampu = $request->mata_kuliah_yang_diampu;
            $tabel_3_a_5->sks = $request->sks;
            $tabel_3_a_5->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-a-5');
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
            $tabel_3_a_5 = Tabel_3_A_5::find($id);
            $tabel_3_a_5->nama_dosen_ndustri = $request->nama_dosen_ndustri;
            $tabel_3_a_5->nidk = $request->nidk;
            $tabel_3_a_5->perusahaan = $request->perusahaan;
            $tabel_3_a_5->pendidikan_tertinggi = $request->pendidikan_tertinggi;
            $tabel_3_a_5->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_a_5->sertifikat_profesi = $request->sertifikat_profesi;
            $tabel_3_a_5->mata_kuliah_yang_diampu = $request->mata_kuliah_yang_diampu;
            $tabel_3_a_5->sks = $request->sks;
            $tabel_3_a_5->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-a-5');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_a_5 = Tabel_3_A_5::find($id);
        $tabel_3_a_5->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-a-5');
    }
}
