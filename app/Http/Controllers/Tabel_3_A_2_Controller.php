<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_A_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_3_A_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_3_A_2::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-3-a-2.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-3-a-2.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-3-a-2.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-3-a-2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_a_2 = new Tabel_3_A_2;
            $tabel_3_a_2->nama_dosen = $request->nama_dosen;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts;
            $tabel_3_a_2->rata_rata_1 =
                ($request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts
                ) / 3;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts;
            $tabel_3_a_2->rata_rata_2 =
                ($request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts
                ) / 3;
            $tabel_3_a_2->rata_rata_jumlah_bimbingan_di_semua_program_semester = ($tabel_3_a_2->rata_rata_1 + $tabel_3_a_2->rata_rata_2) / 2;
            $tabel_3_a_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect()->route('tabel-3-a-2.index');
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
        $tabel_3_a_2 = Tabel_3_A_2::find($id);
        return view('tabel-3-A-2.edit', compact('tabel_3_a_2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1' => 'required|integer',
            'jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_a_2 = Tabel_3_A_2::find($id);
            $tabel_3_a_2->nama_dosen = $request->nama_dosen;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts;
            $tabel_3_a_2->rata_rata_1 =
                ($request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_2 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts_1 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_yang_diakreditasi_ts
                ) / 3;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1 = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1;
            $tabel_3_a_2->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts = $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts;
            $tabel_3_a_2->rata_rata_2 =
                ($request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_2 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts_1 +
                    $request->jumlah_mahasiswa_yang_dibimbing_pada_ps_lain_di_pt_ts
                ) / 3;
            $tabel_3_a_2->rata_rata_jumlah_bimbingan_di_semua_program_semester = ($tabel_3_a_2->rata_rata_1 + $tabel_3_a_2->rata_rata_2) / 2;
            $tabel_3_a_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-a-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_a_2 = Tabel_3_A_2::find($id);
        $tabel_3_a_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-a-2');
    }
}
