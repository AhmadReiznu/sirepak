<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_D_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_D_2_Controller extends Controller
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
            'jlttkbk_rendah' => 'required|integer',
            'jlttkbk_sedang' => 'required|integer',
            'jlttkbk_tinggi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_d_2 = new Tabel_8_D_2;
            $tabel_8_d_2->tahun_lulus = $request->tahun_lulus;
            $tabel_8_d_2->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_d_2->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_d_2->jlttkbk_rendah = $request->jlttkbk_rendah;
            $tabel_8_d_2->jlttkbk_sedang = $request->jlttkbk_sedang;
            $tabel_8_d_2->jlttkbk_tinggi = $request->jlttkbk_tinggi;
            $tabel_8_d_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-d-2');
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
            'jlttkbk_rendah' => 'required|integer',
            'jlttkbk_sedang' => 'required|integer',
            'jlttkbk_tinggi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_d_2 = Tabel_8_D_2::find($id);
            $tabel_8_d_2->tahun_lulus = $request->tahun_lulus;
            $tabel_8_d_2->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_d_2->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_d_2->jlttkbk_rendah = $request->jlttkbk_rendah;
            $tabel_8_d_2->jlttkbk_sedang = $request->jlttkbk_sedang;
            $tabel_8_d_2->jlttkbk_tinggi = $request->jlttkbk_tinggi;
            $tabel_8_d_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-d-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_d_2 = Tabel_8_D_2::find($id);
        $tabel_8_d_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-d-2');
    }
}
