<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_7_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_B_7_2_Controller extends Controller
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
            'luaran_penelitian_dan_pkm' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_7_2 = new Tabel_3_B_7_2;
            $tabel_3_b_7_2->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_3_b_7_2->tahun = $request->tahun;
            $tabel_3_b_7_2->keterangan = $request->keterangan;
            $tabel_3_b_7_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-7-2');
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
            'luaran_penelitian_dan_pkm' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_7_2 = Tabel_3_B_7_2::find($id);
            $tabel_3_b_7_2->luaran_penelitian_ddan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_3_b_7_2->tahun = $request->tahun;
            $tabel_3_b_7_2->keterangan = $request->keterangan;
            $tabel_3_b_7_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-7-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_7_2 = Tabel_3_B_7_2::find($id);
        $tabel_3_b_7_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-7-2');
    }
}
