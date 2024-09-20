<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_F_4_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_8_F_4_3_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_8_F_4_3::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-8-f-4-3.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-8-f-4-3.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-8-F-4-3.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-8-F-4-3.create');
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
            $tabel_8_f_4_3 = new Tabel_8_F_4_3;
            $tabel_8_f_4_3->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_8_f_4_3->tahun = $request->tahun;
            $tabel_8_f_4_3->keterangan = $request->keterangan;
            $tabel_8_f_4_3->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-f-4-3');
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
        $tabel_8_f_4_3 = Tabel_8_F_4_3::find($id);
        return view('tabel-8-F-4-3.edit', compact('tabel_8_f_4_3'));
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
            $tabel_8_f_4_3 = Tabel_8_F_4_3::find($id);
            $tabel_8_f_4_3->luaran_penelitian_dan_pkm = $request->luaran_penelitian_dan_pkm;
            $tabel_8_f_4_3->tahun = $request->tahun;
            $tabel_8_f_4_3->keterangan = $request->keterangan;
            $tabel_8_f_4_3->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-f-4-3');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_f_4_3 = Tabel_8_F_4_3::find($id);
        $tabel_8_f_4_3->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-f-4-3');
    }
}
