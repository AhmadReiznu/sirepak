<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_B_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_3_B_1_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_3_B_1::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('wilayah', function ($row) {
                    $wilayah = $row->tingkat == 'wilayah' ? 'X' : '';
                    return $wilayah;
                })
                ->addColumn('nasional', function ($row) {
                    $nasional = $row->tingkat == 'nasional' ? 'X' : '';
                    return $nasional;
                })
                ->addColumn('internasional', function ($row) {
                    $internasional = $row->tingkat == 'internasional' ? 'X' : '';
                    return $internasional;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-3-b-1.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-3-b-1.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-3-b-1.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-3-b-1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'bidang_keahlian' => 'required',
            'rekognisi_dan_bukti_pendukung' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_b_1 = new Tabel_3_B_1;
            $tabel_3_b_1->nama_dosen = $request->nama_dosen;
            $tabel_3_b_1->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_b_1->rekognisi_dan_bukti_pendukung = $request->rekognisi_dan_bukti_pendukung;
            $tabel_3_b_1->tingkat = $request->tingkat;
            $tabel_3_b_1->tahun = $request->tahun;
            $tabel_3_b_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-b-1');
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
        $tabel_3_b_1 = Tabel_3_B_1::find($id);
        return view('tabel-3-B-1.edit', compact('tabel_3_b_1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_b_1 = Tabel_3_B_1::find($id);
            $tabel_3_b_1->nama_dosen = $request->nama_dosen;
            $tabel_3_b_1->bidang_keahlian = $request->bidang_keahlian;
            $tabel_3_b_1->rekognisi_dan_bukti_pendukung = $request->rekognisi_dan_bukti_pendukung;
            $tabel_3_b_1->tingkat = $request->tingkat;
            $tabel_3_b_1->tahun = $request->tahun;
            $tabel_3_b_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-b-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_b_1 = Tabel_3_B_1::find($id);
        $tabel_3_b_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-b-1');
    }
}
