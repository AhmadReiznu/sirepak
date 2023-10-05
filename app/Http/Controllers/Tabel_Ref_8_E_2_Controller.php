<?php

namespace App\Http\Controllers;

use App\Models\Tabel_Ref_8_E_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_Ref_8_E_2_Controller extends Controller
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
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required|integer',
            'jumlah_tanggapan_kepuasan_pengguna_yang_terlacak' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_ref_8_e_2 = new Tabel_Ref_8_E_2;
            $tabel_ref_8_e_2->tahun_lulus = $request->tahun_lulus;
            $tabel_ref_8_e_2->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_ref_8_e_2->jumlah_tanggapan_kepuasan_pengguna_yang_terlacak = $request->jumlah_tanggapan_kepuasan_pengguna_yang_terlacak;
            $tabel_ref_8_e_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-ref-8-e-2');
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
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required|integer',
            'jumlah_tanggapan_kepuasan_pengguna_yang_terlacak' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_ref_8_e_2 = Tabel_Ref_8_E_2::find($id);
            $tabel_ref_8_e_2->tahun_lulus = $request->tahun_lulus;
            $tabel_ref_8_e_2->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_ref_8_e_2->jumlah_tanggapan_kepuasan_pengguna_yang_terlacak = $request->jumlah_tanggapan_kepuasan_pengguna_yang_terlacak;
            $tabel_ref_8_e_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-ref-8-e-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_ref_8_e_2 = Tabel_Ref_8_E_2::find($id);
        $tabel_ref_8_e_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-ref-8-e-2');
    }
}
