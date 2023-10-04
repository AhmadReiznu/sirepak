<?php

namespace App\Http\Controllers;

use App\Models\Tabel_5_A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_5_A_Controller extends Controller
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
            'semester' => 'required',
            'mata_kuliah_kompetensi' => 'required',
            'sks_kuliah' => 'required',
            'sks_seminar' => 'required',
            'sks_praktikum' => 'required',
            'konversi_kredit_ke_jam' => 'required',
            'capaian_pembelajaran_sikap' => 'required',
            'capaian_pembelajaran_pengetahuan' => 'required',
            'capaian_pembelajaran_keterampilan_umum' => 'required',
            'capaian_pembelajaran_keterampilan_khusus' => 'required',
            'dokumen_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_5_a = new Tabel_5_A;
            $tabel_5_a->semester = $request->semester;
            $tabel_5_a->kode_mata_kuliah = $request->kode_mata_kuliah;
            $tabel_5_a->mata_kuliah_kompetensi = $request->mata_kuliah_kompetensi;
            $tabel_5_a->sks_kuliah = $request->sks_kuliah;
            $tabel_5_a->sks_seminar = $request->sks_seminar;
            $tabel_5_a->sks_praktikum = $request->sks_praktikum;
            $tabel_5_a->konversi_kredit_ke_jam = $request->konversi_kredit_ke_jam;
            $tabel_5_a->capaian_pembelajaran_sikap = $request->capaian_pembelajaran_sikap;
            $tabel_5_a->capaian_pembelajaran_pengetahuan = $request->capaian_pembelajaran_pengetahuan;
            $tabel_5_a->capaian_pembelajaran_keterampilan_umum = $request->capaian_pembelajaran_keterampilan_umum;
            $tabel_5_a->capaian_pembelajaran_keterampilan_khusus = $request->capaian_pembelajaran_keterampilan_khusus;
            $tabel_5_a->dokumen_rencana_pembelajaran = $request->dokumen_rencana_pembelajaran;
            $tabel_5_a->unit_penyelenggara = $request->unit_penyelenggara;
            $tabel_5_a->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-5-a');
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
            'semester' => 'required',
            'mata_kuliah_kompetensi' => 'required',
            'sks_kuliah' => 'required',
            'sks_seminar' => 'required',
            'sks_praktikum' => 'required',
            'konversi_kredit_ke_jam' => 'required',
            'capaian_pembelajaran_sikap' => 'required',
            'capaian_pembelajaran_pengetahuan' => 'required',
            'capaian_pembelajaran_keterampilan_umum' => 'required',
            'capaian_pembelajaran_keterampilan_khusus' => 'required',
            'dokumen_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_5_a = Tabel_5_A::find($id);
            $tabel_5_a->semester = $request->semester;
            $tabel_5_a->kode_mata_kuliah = $request->kode_mata_kuliah;
            $tabel_5_a->mata_kuliah_kompetensi = $request->mata_kuliah_kompetensi;
            $tabel_5_a->sks_kuliah = $request->sks_kuliah;
            $tabel_5_a->sks_seminar = $request->sks_seminar;
            $tabel_5_a->sks_praktikum = $request->sks_praktikum;
            $tabel_5_a->konversi_kredit_ke_jam = $request->konversi_kredit_ke_jam;
            $tabel_5_a->capaian_pembelajaran_sikap = $request->capaian_pembelajaran_sikap;
            $tabel_5_a->capaian_pembelajaran_pengetahuan = $request->capaian_pembelajaran_pengetahuan;
            $tabel_5_a->capaian_pembelajaran_keterampilan_umum = $request->capaian_pembelajaran_keterampilan_umum;
            $tabel_5_a->capaian_pembelajaran_keterampilan_khusus = $request->capaian_pembelajaran_keterampilan_khusus;
            $tabel_5_a->dokumen_rencana_pembelajaran = $request->dokumen_rencana_pembelajaran;
            $tabel_5_a->unit_penyelenggara = $request->unit_penyelenggara;
            $tabel_5_a->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-5-a');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_5_a = Tabel_5_A::find($id);
        $tabel_5_a->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-5-a');
    }
}
