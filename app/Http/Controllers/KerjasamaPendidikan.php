<?php

namespace App\Http\Controllers;

use App\Models\Tabel_1_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class KerjasamaPendidikan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabels11 = Tabel_1_1::all();
        return view('tabel-kerjasama', compact('tabels11'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-kerjasama-pendidikan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'lembaga_mitra' => 'required',
            'tingkat' => 'required',
            'judul_kegiatan_kerjasama' => 'required',
            'manfaat_bagi_ps_yang_diakreditasi' => 'required',
            'waktu_dan_durasi' => 'required',
            'bukti_kerjasama' => 'required|mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
            'tahun_berakhirnya_kerjasama' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // Upload document
            $document_file = $request->file('bukti_kerjasama');
            $document_name = 'document' . date('Ymdhis') . '.' . $document_file->getClientOriginalExtension();
            $document_file->move('dokumen/', $document_name);

            // store
            $tabel11 = new Tabel_1_1;
            $tabel11->lembaga_mitra = $request->lembaga_mitra;
            $tabel11->tingkat = $request->tingkat;
            $tabel11->judul_kegiatan_kerjasama = $request->judul_kegiatan_kerjasama;
            $tabel11->manfaat_bagi_ps_yang_diakreditasi = $request->manfaat_bagi_ps_yang_diakreditasi;
            $tabel11->waktu_dan_durasi = $request->waktu_dan_durasi;
            $tabel11->bukti_kerjasama = $document_name;
            $tabel11->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel11->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('kerjasama-pendidikan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
