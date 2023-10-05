<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_F_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_F_3_Controller extends Controller
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
            'nama_mahasiswa' => 'required',
            'nama_produk_jasa' => 'required',
            'deskripsi_produk_jasa' => 'required',
            'bukti' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // Upload document
            $document_file = $request->file('bukti');
            $document_name = 'document' . date('Ymdhis') . '.' . $document_file->getClientOriginalExtension();
            $document_file->move('dokumen/', $document_name);

            // store
            $tabel_8_f_3 = new Tabel_8_F_3;
            $tabel_8_f_3->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_8_f_3->nama_produk_jasa = $request->nama_produk_jasa;
            $tabel_8_f_3->deskripsi_produk_jasa = $request->deskripsi_produk_jasa;
            $tabel_8_f_3->bukti = $document_name;
            $tabel_8_f_3->tahun = $request->tahun;
            $tabel_8_f_3->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-f-3');
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
            'nama_mahasiswa' => 'required',
            'nama_produk_jasa' => 'required',
            'deskripsi_produk_jasa' => 'required',
            'bukti' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            $tabel_8_f_3 = Tabel_8_F_3::find($id);

            // Upload document
            if ($request->hasFile('bukti')) {
                $path = 'dokumen/' . $tabel_8_f_3->bukti;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $document_file = $request->file('bukti');
                $document_name = 'document' . date('Ymdhis') . '.' . $document_file->getClientOriginalExtension();
                $document_file->move('dokumen/', $document_name);
            } else {
                $document_name = $request->current_document;
            }

            // update
            $tabel_8_f_3->nama_mahasiswa = $request->nama_mahasiswa;
            $tabel_8_f_3->nama_produk_jasa = $request->nama_produk_jasa;
            $tabel_8_f_3->deskripsi_produk_jasa = $request->deskripsi_produk_jasa;
            $tabel_8_f_3->bukti = $document_name;
            $tabel_8_f_3->tahun = $request->tahun;
            $tabel_8_f_3->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-f-3');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_f_3 = Tabel_8_F_3::find($id);
        $tabel_8_f_3->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-f-3');
    }
}
