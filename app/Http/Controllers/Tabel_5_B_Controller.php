<?php

namespace App\Http\Controllers;

use App\Models\Tabel_5_B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_5_B_Controller extends Controller
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
            'judul_penelitian_pkm' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_5_b = new Tabel_5_B;
            $tabel_5_b->judul_penelitian_pkm = $request->judul_penelitian_pkm;
            $tabel_5_b->nama_dosen = $request->nama_dosen;
            $tabel_5_b->mata_kuliah = $request->mata_kuliah;
            $tabel_5_b->bentuk_integrasi = $request->bentuk_integrasi;
            $tabel_5_b->tahun = $request->tahun;
            $tabel_5_b->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-5-b');
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
            'judul_penelitian_pkm' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_5_b = Tabel_5_B::find($id);
            $tabel_5_b->judul_penelitian_pkm = $request->judul_penelitian_pkm;
            $tabel_5_b->nama_dosen = $request->nama_dosen;
            $tabel_5_b->mata_kuliah = $request->mata_kuliah;
            $tabel_5_b->bentuk_integrasi = $request->bentuk_integrasi;
            $tabel_5_b->tahun = $request->tahun;
            $tabel_5_b->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-5-b');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_5_b = Tabel_5_B::find($id);
        $tabel_5_b->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-5-b');
    }
}
