<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_3_B_5_Controller extends Controller
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
            'judul_artikel_yang_disitasi' => 'required',
            'jumlah_sitasi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_5 = new Tabel_3_B_5;
            $tabel_3_b_5->nama_dosen = $request->nama_dosen;
            $tabel_3_b_5->judul_artikel_yang_disitasi = $request->judul_artikel_yang_disitasi;
            $tabel_3_b_5->jumlah_sitasi = $request->jumlah_sitasi;
            $tabel_3_b_5->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-5');
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
            'nama_dosen' => 'required',
            'judul_artikel_yang_disitasi' => 'required',
            'jumlah_sitasi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_5 = Tabel_3_B_5::find($id);
            $tabel_3_b_5->nama_dosen = $request->nama_dosen;
            $tabel_3_b_5->judul_artikel_yang_disitasi = $request->judul_artikel_yang_disitasi;
            $tabel_3_b_5->jumlah_sitasi = $request->jumlah_sitasi;
            $tabel_3_b_5->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-5');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_5 = Tabel_3_B_5::find($id);
        $tabel_3_b_5->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-5');
    }
}
