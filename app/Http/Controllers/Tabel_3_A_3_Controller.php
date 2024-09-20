<?php

namespace App\Http\Controllers;

use App\Models\Tabel_3_A_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_3_A_3_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_3_A_3::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-3-a-3.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-3-a-3.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-3-A-3.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-3-A-3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'dtps' => 'required',
            'ewmp_pendidikan_ps_yang_diakreditasi' => 'required',
            'ewmp_pendidikan_ps_lain_di_dalam_pt' => 'required',
            'ewmp_pendidikan_ps_lain_di_luar_pt' => 'required',
            'ewmp_penelitian' => 'required',
            'ewmp_pkm' => 'required',
            'ewmp_tugas_tambahan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_3_a_3 = new Tabel_3_A_3;
            $tabel_3_a_3->nama_dosen = $request->nama_dosen;
            $tabel_3_a_3->dtps = $request->dtps;
            $tabel_3_a_3->ewmp_pendidikan_ps_yang_diakreditasi = $request->ewmp_pendidikan_ps_yang_diakreditasi;
            $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_dalam_pt = $request->ewmp_pendidikan_ps_lain_di_dalam_pt;
            $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_luar_pt = $request->ewmp_pendidikan_ps_lain_di_luar_pt;
            $tabel_3_a_3->ewmp_penelitian = $request->ewmp_penelitian;
            $tabel_3_a_3->ewmp_pkm = $request->ewmp_pkm;
            $tabel_3_a_3->ewmp_tugas_tambahan = $request->ewmp_tugas_tambahan;
            $tabel_3_a_3->jumlah = $request->ewmp_pendidikan_ps_yang_diakreditasi +
                $request->ewmp_pendidikan_ps_lain_di_dalam_pt +
                $request->ewmp_pendidikan_ps_lain_di_luar_pt +
                $request->ewmp_penelitian +
                $request->ewmp_pkm +
                $request->ewmp_tugas_tambahan;
            $tabel_3_a_3->rata_rata_per_semester = $tabel_3_a_3->jumlah / 2;
            $tabel_3_a_3->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-3-a-3');
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
        $tabel_3_a_3 = Tabel_3_A_3::find($id);
        return view('tabel-3-A-3.edit', compact('tabel_3_a_3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'nama_dosen' => 'required',
            'dtps' => 'required',
            'ewmp_pendidikan_ps_yang_diakreditasi' => 'required',
            'ewmp_pendidikan_ps_lain_di_dalam_pt' => 'required',
            'ewmp_pendidikan_ps_lain_di_luar_pt' => 'required',
            'ewmp_penelitian' => 'required',
            'ewmp_pkm' => 'required',
            'ewmp_tugas_tambahan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_3_a_3 = Tabel_3_A_3::find($id);
            $tabel_3_a_3->nama_dosen = $request->nama_dosen;
            $tabel_3_a_3->dtps = $request->dtps;
            $tabel_3_a_3->ewmp_pendidikan_ps_yang_diakreditasi = $request->ewmp_pendidikan_ps_yang_diakreditasi;
            $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_dalam_pt = $request->ewmp_pendidikan_ps_lain_di_dalam_pt;
            $tabel_3_a_3->ewmp_pendidikan_ps_lain_di_luar_pt = $request->ewmp_pendidikan_ps_lain_di_luar_pt;
            $tabel_3_a_3->ewmp_penelitian = $request->ewmp_penelitian;
            $tabel_3_a_3->ewmp_pkm = $request->ewmp_pkm;
            $tabel_3_a_3->ewmp_tugas_tambahan = $request->ewmp_tugas_tambahan;
            $tabel_3_a_3->jumlah = $request->ewmp_pendidikan_ps_yang_diakreditasi +
                $request->ewmp_pendidikan_ps_lain_di_dalam_pt +
                $request->ewmp_pendidikan_ps_lain_di_luar_pt +
                $request->ewmp_penelitian +
                $request->ewmp_pkm +
                $request->ewmp_tugas_tambahan;
            $tabel_3_a_3->rata_rata_per_semester = $tabel_3_a_3->jumlah / 2;
            $tabel_3_a_3->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-3-a-3');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_3_a_3 = Tabel_3_A_3::find($id);
        $tabel_3_a_3->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-3-a-3');
    }
}
