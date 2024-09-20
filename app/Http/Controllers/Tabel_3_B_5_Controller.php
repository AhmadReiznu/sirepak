<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_3_B_5_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_3_B_5::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-3-b-5.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-3-b-5.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-3-B-5.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-3-B-5.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'judul_artikel_yang_disitasi' => 'required',
            'jumlah_sitasi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_5 = new Tabel_3_B_5;
            $tabel_3_b_5->nama_dosen = $request->nama_dosen;
            $tabel_3_b_5->judul_artikel_yang_disitasi = $request->judul_artikel_yang_disitasi;
            $tabel_3_b_5->jumlah_sitasi = $request->jumlah_sitasi;
            $tabel_3_b_5->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-5');
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
        $tabel_3_b_5 = Tabel_3_B_5::find($id);
        return view('tabel-3-B-5.edit', compact('tabel_3_b_5'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'judul_artikel_yang_disitasi' => 'required',
            'jumlah_sitasi' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_5 = Tabel_3_B_5::find($id);
            $tabel_3_b_5->nama_dosen = $request->nama_dosen;
            $tabel_3_b_5->judul_artikel_yang_disitasi = $request->judul_artikel_yang_disitasi;
            $tabel_3_b_5->jumlah_sitasi = $request->jumlah_sitasi;
            $tabel_3_b_5->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-5');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_5 = Tabel_3_B_5::find($id);
        $tabel_3_b_5->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-5');
    }
}
