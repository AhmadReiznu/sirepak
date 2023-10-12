<?php

namespace App\Http\Controllers;

use App\Models\Tabel_1_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_1_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_1_2::all();
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
                    <div>
                        <form class="inline-block" action="' . route('tabel-1-2.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                            <a href="' . route("tabel-1-2.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button data-toggle="modal" data-target="#deleteModal' . $row->id . '" class="btn btn-danger btn-sm btn-delete rounded-md px-2 py-1 m-1">
                                <i class="fa fa-trash"></i>
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['internasional', 'nasional', 'lokal', 'bukti', 'action'])
                ->make(true);
        }
        return view('tabel-1-2.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-1-2.create');
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
            $tabel_1_2->waktu_dan_durasi = $request->waktu_dan_durasi . ' Tahun';
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
        return view('tabel-1-2.edit', compact('tabel_1_2'));
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
            $tabel_1_2->waktu_dan_durasi = $request->waktu_dan_durasi . ' Tahun';
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
