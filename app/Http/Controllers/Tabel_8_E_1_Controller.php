<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_E_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_E_1_Controller extends Controller
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
            'jumlah_lulusan_yang_terlacak' => 'required|integer',
            'jltbbt_lokal' => 'required|integer',
            'jltbbt_nasional' => 'required|integer',
            'jltbbt_multinasional' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_e_1 = new Tabel_8_E_1;
            $tabel_8_e_1->tahun_lulus = $request->tahun_lulus;
            $tabel_8_e_1->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_e_1->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_e_1->jltbbt_lokal = $request->jltbbt_lokal;
            $tabel_8_e_1->jltbbt_nasional = $request->jltbbt_nasional;
            $tabel_8_e_1->jltbbt_multinasional = $request->jltbbt_multinasional;
            $tabel_8_e_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-e-1');
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
            'jumlah_lulusan_yang_terlacak' => 'required|integer',
            'jltbbt_lokal' => 'required|integer',
            'jltbbt_nasional' => 'required|integer',
            'jltbbt_multinasional' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_e_1 = Tabel_8_E_1::find($id);
            $tabel_8_e_1->tahun_lulus = $request->tahun_lulus;
            $tabel_8_e_1->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_e_1->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_e_1->jltbbt_lokal = $request->jltbbt_lokal;
            $tabel_8_e_1->jltbbt_nasional = $request->jltbbt_nasional;
            $tabel_8_e_1->jltbbt_multinasional = $request->jltbbt_multinasional;
            $tabel_8_e_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-e-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_e_1 = Tabel_8_E_1::find($id);
        $tabel_8_e_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-e-1');
    }
}
