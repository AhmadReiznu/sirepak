<?php

namespace App\Http\Controllers;

use App\Models\Tabel_1_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_1_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabels12 = Tabel_1_2::all();
        return view('kerjasama-penelitian.index', compact('tabels12'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kerjasama-penelitian.create');
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
            $tabel_1_2 = new Tabel_1_2;
            $tabel_1_2->lembaga_mitra = $request->lembaga_mitra;
            $tabel_1_2->tingkat = $request->tingkat;
            $tabel_1_2->judul_kegiatan_kerjasama = $request->judul_kegiatan_kerjasama;
            $tabel_1_2->manfaat_bagi_ps_yang_diakreditasi = $request->manfaat_bagi_ps_yang_diakreditasi;
            $tabel_1_2->waktu_dan_durasi = $request->waktu_dan_durasi;
            $tabel_1_2->bukti_kerjasama = $document_name;
            $tabel_1_2->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel_1_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-1-2');
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
        $tabel_1_2 = Tabel_1_2::find($id);
        return view('kerjasama-penelitian.edit', compact('tabel_1_2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $tabel_1_2 = Tabel_1_2::find($id);
        $rules = [
            'lembaga_mitra' => 'required',
            'tingkat' => 'required',
            'judul_kegiatan_kerjasama' => 'required',
            'manfaat_bagi_ps_yang_diakreditasi' => 'required',
            'waktu_dan_durasi' => 'required',
            'bukti_kerjasama' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
            'tahun_berakhirnya_kerjasama' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // Upload document
            if ($request->hasFile('bukti_kerjasama')) {
                $path = 'dokumen/' . $tabel_1_2->bukti_kerjasama;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $document_file = $request->file('bukti_kerjasama');
                $document_name = 'document' . date('Ymdhis') . '.' . $document_file->getClientOriginalExtension();
                $document_file->move('dokumen/', $document_name);
            } else {
                $document_name = $request->current_document;
            }

            // update
            $tabel_1_2->lembaga_mitra = $request->lembaga_mitra;
            $tabel_1_2->tingkat = $request->tingkat;
            $tabel_1_2->judul_kegiatan_kerjasama = $request->judul_kegiatan_kerjasama;
            $tabel_1_2->manfaat_bagi_ps_yang_diakreditasi = $request->manfaat_bagi_ps_yang_diakreditasi;
            $tabel_1_2->waktu_dan_durasi = $request->waktu_dan_durasi;
            $tabel_1_2->bukti_kerjasama = $document_name;
            $tabel_1_2->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel_1_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-1-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_1_2 = Tabel_1_2::find($id);
        $path = 'dokumen/' . $tabel_1_2->bukti_kerjasama;
        if (File::exists($path)) {
            File::delete($path);
        }
        $tabel_1_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect()->back();
    }
}
