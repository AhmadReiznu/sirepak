<?php

namespace App\Http\Controllers;

use App\Models\Tabel_2_B;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_2_B_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_2_B::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-2-b.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-2-b.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-2-b.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-2-b.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'program_studi' => 'required',
            'jumlah_mahasiswa_aktif_ts_2' => 'required|integer',
            'jumlah_mahasiswa_aktif_ts_1' => 'required|integer',
            'jumlah_mahasiswa_aktif_ts' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts_2' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts_1' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts_2' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts_1' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_2_b = new Tabel_2_B;
            $tabel_2_b->program_studi = $request->program_studi;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts_2 = $request->jumlah_mahasiswa_aktif_ts_2;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts_1 = $request->jumlah_mahasiswa_aktif_ts_1;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts = $request->jumlah_mahasiswa_aktif_ts;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts_2 = $request->jumlah_mahasiswa_asing_penuh_waktu_ts_2;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts_1 = $request->jumlah_mahasiswa_asing_penuh_waktu_ts_1;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts = $request->jumlah_mahasiswa_asing_penuh_waktu_ts;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts_2 = $request->jumlah_mahasiswa_asing_paruh_waktu_ts_2;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts_1 = $request->jumlah_mahasiswa_asing_paruh_waktu_ts_1;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts = $request->jumlah_mahasiswa_asing_paruh_waktu_ts;
            $tabel_2_b->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-2-b');
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
        $tabel_2_b = Tabel_2_B::find($id);
        return view('tabel-2-B.edit', compact('tabel_2_b'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'program_studi' => 'required',
            'jumlah_mahasiswa_aktif_ts_2' => 'required|integer',
            'jumlah_mahasiswa_aktif_ts_1' => 'required|integer',
            'jumlah_mahasiswa_aktif_ts' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts_2' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts_1' => 'required|integer',
            'jumlah_mahasiswa_asing_penuh_waktu_ts' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts_2' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts_1' => 'required|integer',
            'jumlah_mahasiswa_asing_paruh_waktu_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_2_b = Tabel_2_B::find($id);
            $tabel_2_b->program_studi = $request->program_studi;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts_2 = $request->jumlah_mahasiswa_aktif_ts_2;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts_1 = $request->jumlah_mahasiswa_aktif_ts_1;
            $tabel_2_b->jumlah_mahasiswa_aktif_ts = $request->jumlah_mahasiswa_aktif_ts;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts_2 = $request->jumlah_mahasiswa_asing_penuh_waktu_ts_2;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts_1 = $request->jumlah_mahasiswa_asing_penuh_waktu_ts_1;
            $tabel_2_b->jumlah_mahasiswa_asing_penuh_waktu_ts = $request->jumlah_mahasiswa_asing_penuh_waktu_ts;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts_2 = $request->jumlah_mahasiswa_asing_paruh_waktu_ts_2;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts_1 = $request->jumlah_mahasiswa_asing_paruh_waktu_ts_1;
            $tabel_2_b->jumlah_mahasiswa_asing_paruh_waktu_ts = $request->jumlah_mahasiswa_asing_paruh_waktu_ts;
            $tabel_2_b->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-2-b');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_2_b = Tabel_2_B::find($id);
        $tabel_2_b->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-2-b');
    }
}
