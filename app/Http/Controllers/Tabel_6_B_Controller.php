<?php

namespace App\Http\Controllers;

use App\Models\Tabel_6_B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_6_B_Controller extends Controller
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
            'judul_tesis' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_6_b = new Tabel_6_B;
            $tabel_6_b->nama_dosen = $request->nama_dosen;
            $tabel_6_b->tema_penelitian_sesuai_roadmap = $request->tema_penelitian_sesuai_roadmap;
            $tabel_6_b->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_6_b->judul_tesis = $request->judul_tesis;
            $tabel_6_b->tahun = $request->tahun;
            $tabel_6_b->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-6-b');
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
            'judul_tesis' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_6_b = Tabel_6_B::find($id);
            $tabel_6_b->nama_dosen = $request->nama_dosen;
            $tabel_6_b->tema_penelitian_sesuai_roadmap = $request->tema_penelitian_sesuai_roadmap;
            $tabel_6_b->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_6_b->judul_tesis = $request->judul_tesis;
            $tabel_6_b->tahun = $request->tahun;
            $tabel_6_b->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-6-b');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_6_b = Tabel_6_B::find($id);
        $tabel_6_b->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-6-b');
    }
}
