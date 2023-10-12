<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_F_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_8_F_3_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_8_F_3::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('bukti', function ($row) {
                    $bukti = '<a href=dokumen/' . $row->bukti . '>Lihat/Download</a>';
                    return $bukti;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-8-f-3.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-8-f-3.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button data-toggle="modal" data-target="#deleteModal' . $row->id . '" class="btn btn-danger btn-sm btn-delete rounded-md px-2 py-1 m-1">
                            <i class="fa fa-trash"></i>
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
                    return $actionBtn;
                })
                ->rawColumns(['bukti', 'action'])
                ->make(true);
        }
        return view('tabel-8-f-3.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-8-f-3.create');
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
        $tabel_8_f_3 = Tabel_8_F_3::find($id);
        return view('tabel-8-f-3.edit', compact('tabel_8_f_3'));
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
