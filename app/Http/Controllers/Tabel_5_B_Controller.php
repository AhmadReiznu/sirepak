<?php

namespace App\Http\Controllers;

use App\Models\Tabel_5_B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_5_B_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_5_B::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-5-b.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-5-b.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button data-toggle="modal" data-target="#deleteModal' . $row->id . '" class="btn btn-danger btn-sm btn-delete rounded-md px-2 py-1 m-1">
                            <i class="fa fa-trash"></i>
                        </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('tabel-5-B.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-5-B.create');
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
        $tabel_5_b = Tabel_5_B::find($id);
        return view('tabel-5-B.edit', compact('tabel_5_b'));
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
