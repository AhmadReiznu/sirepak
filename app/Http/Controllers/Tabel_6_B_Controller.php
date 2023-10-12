<?php

namespace App\Http\Controllers;

use App\Models\Tabel_6_B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_6_B_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_6_B::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-6-b.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-6-b.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-6-b.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-6-b.create');
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
        $tabel_6_b = Tabel_6_B::find($id);
        return view('tabel-6-b.edit', compact('tabel_6_b'));
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
