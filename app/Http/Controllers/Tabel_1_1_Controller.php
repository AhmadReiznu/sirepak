<?php

namespace App\Http\Controllers;

use App\Models\Tabel_1_1;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_1_1_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_1_1::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('internasional', function ($row) {
                    $internasional = $row->tingkat == 'internasional' ? 'X' : '';
                    return $internasional;
                })
                ->addColumn('nasional', function ($row) {
                    $nasional = $row->tingkat == 'nasional' ? 'X' : '';
                    return $nasional;
                })
                ->addColumn('lokal', function ($row) {
                    $lokal = $row->tingkat == 'lokal' ? 'X' : '';
                    return $lokal;
                })
                ->addColumn('bukti', function ($row) {
                    $bukti = '<a href=dokumen/' . $row->bukti_kerjasama . '>Lihat/Download</a>';
                    return $bukti;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <a href=tabel-1-1/edit/' . $row->id . ' class="edit btn btn-success btn-sm">Edit</a>
                    <a href=tabel-1-1/delete/' . $row->id . ' class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['internasional', 'nasional', 'lokal', 'bukti', 'action'])
                ->make(true);
        }
        $tabels11 = Tabel_1_1::all();
        return view('kerjasama-pendidikan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kerjasama-pendidikan.create');
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
            'waktu_dan_durasi' => 'required',
            'manfaat_bagi_ps_yang_diakreditasi' => 'required',
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
            $tabel11->waktu_dan_durasi = $request->waktu_dan_durasi . ' Tahun';
            $tabel11->bukti_kerjasama = $document_name;
            $tabel11->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel11->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('tabel-1-1');
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
        $tabel_1_1 = Tabel_1_1::find($id);
        return view('kerjasama-pendidikan.edit', compact('tabel_1_1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $tabel_1_1 = Tabel_1_1::find($id);
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
                $path = 'dokumen/' . $tabel_1_1->bukti_kerjasama;
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
            $tabel_1_1->lembaga_mitra = $request->lembaga_mitra;
            $tabel_1_1->tingkat = $request->tingkat;
            $tabel_1_1->judul_kegiatan_kerjasama = $request->judul_kegiatan_kerjasama;
            $tabel_1_1->manfaat_bagi_ps_yang_diakreditasi = $request->manfaat_bagi_ps_yang_diakreditasi;
            $tabel_1_1->waktu_dan_durasi = $request->waktu_dan_durasi . ' Tahun';
            $tabel_1_1->bukti_kerjasama = $document_name;
            $tabel_1_1->tahun_berakhirnya_kerjasama = $request->tahun_berakhirnya_kerjasama;
            $tabel_1_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('tabel-1-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_1_1 = Tabel_1_1::find($id);
        $path = 'dokumen/' . $tabel_1_1->bukti_kerjasama;
        if (File::exists($path)) {
            File::delete($path);
        }
        $tabel_1_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect()->back();
    }
}
