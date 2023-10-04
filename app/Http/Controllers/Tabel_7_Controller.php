<?php

namespace App\Http\Controllers;

use App\Models\Tabel_7;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_7_Controller extends Controller
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
            'tema_penelitian_sesuai_roadmap' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_7 = new Tabel_7;
            $tabel_7->nama_dosen = $request->nama_dosen;
            $tabel_7->tema_penelitian_sesuai_roadmap = $request->tema_penelitian_sesuai_roadmap;
            $tabel_7->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_7->judul_kegiatan = $request->judul_kegiatan;
            $tabel_7->tahun = $request->tahun;
            $tabel_7->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-7');
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
            'tema_penelitian_sesuai_roadmap' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_7 = Tabel_7::find($id);
            $tabel_7->nama_dosen = $request->nama_dosen;
            $tabel_7->tema_penelitian_sesuai_roadmap = $request->tema_penelitian_sesuai_roadmap;
            $tabel_7->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_7->judul_kegiatan = $request->judul_kegiatan;
            $tabel_7->tahun = $request->tahun;
            $tabel_7->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-7');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_7 = Tabel_7::find($id);
        $tabel_7->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-7');
    }
}
