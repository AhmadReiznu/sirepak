<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_4_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_B_4_1_Controller extends Controller
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
            'jenis_publikasi' => 'required',
            'jumlah_judul_ts_2' => 'required|integer',
            'jumlah_judul_ts_1' => 'required|integer',
            'jumlah_judul_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_4_1 = new Tabel_3_B_4_1;
            $tabel_3_b_4_1->jenis_publikasi = $request->jenis_publikasi;
            $tabel_3_b_4_1->jumlah_judul_ts_2 = $request->jumlah_judul_ts_2;
            $tabel_3_b_4_1->jumlah_judul_ts_1 = $request->jumlah_judul_ts_1;
            $tabel_3_b_4_1->jumlah_judul_ts = $request->jumlah_judul_ts;
            $tabel_3_b_4_1->jumlah =
                $request->jumlah_judul_ts_2 +
                $request->jumlah_judul_ts_1 +
                $request->jumlah_judul_ts;
            $tabel_3_b_4_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-4-1');
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
            'jenis_publikasi' => 'required',
            'jumlah_judul_ts_2' => 'required|integer',
            'jumlah_judul_ts_1' => 'required|integer',
            'jumlah_judul_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_4_1 = Tabel_3_B_4_1::find($id);
            $tabel_3_b_4_1->jenis_publikasi = $request->jenis_publikasi;
            $tabel_3_b_4_1->jumlah_judul_ts_2 = $request->jumlah_judul_ts_2;
            $tabel_3_b_4_1->jumlah_judul_ts_1 = $request->jumlah_judul_ts_1;
            $tabel_3_b_4_1->jumlah_judul_ts = $request->jumlah_judul_ts;
            $tabel_3_b_4_1->jumlah =
                $request->jumlah_judul_ts_2 +
                $request->jumlah_judul_ts_1 +
                $request->jumlah_judul_ts;
            $tabel_3_b_4_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-4-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_4_1 = Tabel_3_B_4_1::find($id);
        $tabel_3_b_4_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-4-1');
    }
}
