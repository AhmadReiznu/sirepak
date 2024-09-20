<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_F_4_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_8_F_4_1_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_8_F_4_1::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('bukti', function ($row) {
                    $bukti = '<a href=dokumen/' . $row->bukti . '>Lihat/Download</a>';
                    return $bukti;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-8-f-4-1.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-8-f-4-1.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-8-F-4-1.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-8-F-4-1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'luaran_penelitian_dan_pkm' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_f_4_1 = new Tabel_8_F_4_1;
            $tabel_8_f_4_1->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_8_f_4_1->tahun = $request->tahun;
            $tabel_8_f_4_1->keterangan = $request->keterangan;
            $tabel_8_f_4_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-f-4-1');
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
        $tabel_8_f_4_1 = Tabel_8_F_4_1::find($id);
        return view('tabel-8-F-4-1.edit', compact('tabel_8_f_4_1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'luaran_penelitian_dan_pkm' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_f_4_1 = Tabel_8_F_4_1::find($id);
            $tabel_8_f_4_1->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_8_f_4_1->tahun = $request->tahun;
            $tabel_8_f_4_1->keterangan = $request->keterangan;
            $tabel_8_f_4_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-f-4-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_f_4_1 = Tabel_8_F_4_1::find($id);
        $tabel_8_f_4_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-f-4-1');
    }
}
