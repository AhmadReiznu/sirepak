<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_B_3_Controller extends Controller
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
            'sumber_pembiayaan' => 'required',
            'jumlah_judul_pkm_ts_2' => 'required|integer',
            'jumlah_judul_pkm_ts_1' => 'required|integer',
            'jumlah_judul_pkm_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_3 = new Tabel_3_B_3;
            $tabel_3_b_3->sumber_pembiayaan = $request->sumber_pembiayaan;
            $tabel_3_b_3->jumlah_judul_pkm_ts_2 = $request->jumlah_judul_pkm_ts_2;
            $tabel_3_b_3->jumlah_judul_pkm_ts_1 = $request->jumlah_judul_pkm_ts_1;
            $tabel_3_b_3->jumlah_judul_pkm_ts = $request->jumlah_judul_pkm_ts;
            $tabel_3_b_3->jumlah =
                $request->jumlah_judul_pkm_ts_2 +
                $request->jumlah_judul_pkm_ts_1 +
                $request->jumlah_judul_pkm_ts;
            $tabel_3_b_3->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-3');
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
            'sumber_pembiayaan' => 'required',
            'jumlah_judul_pkm_ts_2' => 'required|integer',
            'jumlah_judul_pkm_ts_1' => 'required|integer',
            'jumlah_judul_pkm_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_3 = Tabel_3_B_3::find($id);
            $tabel_3_b_3->sumber_pembiayaan = $request->sumber_pembiayaan;
            $tabel_3_b_3->jumlah_judul_pkm_ts_2 = $request->jumlah_judul_pkm_ts_2;
            $tabel_3_b_3->jumlah_judul_pkm_ts_1 = $request->jumlah_judul_pkm_ts_1;
            $tabel_3_b_3->jumlah_judul_pkm_ts = $request->jumlah_judul_pkm_ts;
            $tabel_3_b_3->jumlah =
                $request->jumlah_judul_pkm_ts_2 +
                $request->jumlah_judul_pkm_ts_1 +
                $request->jumlah_judul_pkm_ts;
            $tabel_3_b_3->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-3');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_3 = Tabel_3_B_3::find($id);
        $tabel_3_b_3->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-3');
    }
}
