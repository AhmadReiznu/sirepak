<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_7_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_B_7_1_Controller extends Controller
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
            $tabel_3_b_7_1 = new Tabel_3_B_7_1;
            $tabel_3_b_7_1->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_3_b_7_1->tahun = $request->tahun;
            $tabel_3_b_7_1->keterangan = $request->keterangan;
            $tabel_3_b_7_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-7-1');
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
            $tabel_3_b_7_1 = Tabel_3_B_7_1::find($id);
            $tabel_3_b_7_1->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_3_b_7_1->tahun = $request->tahun;
            $tabel_3_b_7_1->keterangan = $request->keterangan;
            $tabel_3_b_7_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-7-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_7_1 = Tabel_3_B_7_1::find($id);
        $tabel_3_b_7_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-7-1');
    }
}
