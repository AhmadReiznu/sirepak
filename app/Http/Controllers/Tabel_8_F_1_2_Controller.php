<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_F_1_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_8_F_1_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_8_F_1_2::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-8-f-1-2.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-8-f-1-2.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-8-F-1-2.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-8-F-1-2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'jenis_publikasi' => 'required',
            'jumlah_judul_ts_2' => 'required|integer',
            'jumlah_judul_ts_1' => 'required|integer',
            'jumlah_judul_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_f_1_2 = new Tabel_8_F_1_2;
            $tabel_8_f_1_2->jenis_publikasi = $request->jenis_publikasi;
            $tabel_8_f_1_2->jumlah_judul_ts_2 = $request->jumlah_judul_ts_2;
            $tabel_8_f_1_2->jumlah_judul_ts_1 = $request->jumlah_judul_ts_1;
            $tabel_8_f_1_2->jumlah_judul_ts = $request->jumlah_judul_ts;
            $tabel_8_f_1_2->jumlah =
                $request->jumlah_judul_ts_2 +
                $request->jumlah_judul_ts_1 +
                $request->jumlah_judul_ts;
            $tabel_8_f_1_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-f-1-2');
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
        $tabel_8_f_1_2 = Tabel_8_F_1_2::find($id);
        return view('tabel-8-F-1-2.edit', compact('tabel_8_f_1_2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'jenis_publikasi' => 'required',
            'jumlah_judul_ts_2' => 'required|integer',
            'jumlah_judul_ts_1' => 'required|integer',
            'jumlah_judul_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_f_1_2 = Tabel_8_F_1_2::find($id);
            $tabel_8_f_1_2->jenis_publikasi = $request->jenis_publikasi;
            $tabel_8_f_1_2->jumlah_judul_ts_2 = $request->jumlah_judul_ts_2;
            $tabel_8_f_1_2->jumlah_judul_ts_1 = $request->jumlah_judul_ts_1;
            $tabel_8_f_1_2->jumlah_judul_ts = $request->jumlah_judul_ts;
            $tabel_8_f_1_2->jumlah =
                $request->jumlah_judul_ts_2 +
                $request->jumlah_judul_ts_1 +
                $request->jumlah_judul_ts;
            $tabel_8_f_1_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-f-1-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_f_1_2 = Tabel_8_F_1_2::find($id);
        $tabel_8_f_1_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-f-1-2');
    }
}
