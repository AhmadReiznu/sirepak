<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_6;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_3_B_6_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_3_B_6::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('bukti', function ($row) {
                    $bukti = '<a href=dokumen/' . $row->bukti . '>Lihat/Download</a>';
                    return $bukti;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-3-b-6.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-3-b-6.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-3-b-6.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-3-b-6.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'nama_produk_jasa' => 'required',
            'deskripsi_produk_jasa' => 'required',
            'bukti' => 'required|mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
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
            $tabel_3_b_6 = new Tabel_3_B_6;
            $tabel_3_b_6->nama_dosen = $request->nama_dosen;
            $tabel_3_b_6->nama_produk_jasa = $request->nama_produk_jasa;
            $tabel_3_b_6->deskripsi_produk_jasa = $request->deskripsi_produk_jasa;
            $tabel_3_b_6->bukti = $document_name;
            $tabel_3_b_6->tahun = $request->tahun;
            $tabel_3_b_6->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-6');
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
        $tabel_3_b_6 = Tabel_3_B_6::find($id);
        return view('tabel-3-B-6.edit', compact('tabel_3_b_6'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'nama_produk_jasa' => 'required',
            'deskripsi_produk_jasa' => 'required',
            'bukti' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // Upload document
            $tabel_3_b_6 = Tabel_3_B_6::find($id);
            if ($request->hasFile('bukti')) {
                $path = 'dokumen/' . $tabel_3_b_6->bukti;
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
            $tabel_3_b_6->nama_dosen = $request->nama_dosen;
            $tabel_3_b_6->nama_produk_jasa = $request->nama_produk_jasa;
            $tabel_3_b_6->deskripsi_produk_jasa = $request->deskripsi_produk_jasa;
            $tabel_3_b_6->bukti = $document_name;
            $tabel_3_b_6->tahun = $request->tahun;
            $tabel_3_b_6->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-6');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_6 = Tabel_3_B_6::find($id);
        $tabel_3_b_6->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-6');
    }
}
