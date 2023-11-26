<?php

namespace App\Http\Controllers;

use App\Models\Tabel_5_A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_5_A_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_5_A::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-5-a.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-5-a.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-5-a.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-5-a.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'semester' => 'required',
            'mata_kuliah_kompetensi' => 'required',
            'sks_kuliah' => 'required',
            'sks_seminar' => 'required',
            'sks_praktikum' => 'required',
            'konversi_kredit_ke_jam' => 'required',
            'capaian_pembelajaran_sikap' => 'required',
            'capaian_pembelajaran_pengetahuan' => 'required',
            'capaian_pembelajaran_keterampilan_umum' => 'required',
            'capaian_pembelajaran_keterampilan_khusus' => 'required',
            'dokumen_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_5_a = new Tabel_5_A;
            $tabel_5_a->semester = $request->semester;
            $tabel_5_a->kode_mata_kuliah = $request->kode_mata_kuliah;
            $tabel_5_a->nama_mata_kuliah = $request->nama_mata_kuliah;
            $tabel_5_a->mata_kuliah_kompetensi = $request->mata_kuliah_kompetensi;
            $tabel_5_a->sks_kuliah = $request->sks_kuliah;
            $tabel_5_a->sks_seminar = $request->sks_seminar;
            $tabel_5_a->sks_praktikum = $request->sks_praktikum;
            $tabel_5_a->konversi_kredit_ke_jam = $request->konversi_kredit_ke_jam;
            $tabel_5_a->capaian_pembelajaran_sikap = $request->capaian_pembelajaran_sikap;
            $tabel_5_a->capaian_pembelajaran_pengetahuan = $request->capaian_pembelajaran_pengetahuan;
            $tabel_5_a->capaian_pembelajaran_keterampilan_umum = $request->capaian_pembelajaran_keterampilan_umum;
            $tabel_5_a->capaian_pembelajaran_keterampilan_khusus = $request->capaian_pembelajaran_keterampilan_khusus;
            $tabel_5_a->dokumen_rencana_pembelajaran = $request->dokumen_rencana_pembelajaran;
            $tabel_5_a->unit_penyelenggara = $request->unit_penyelenggara;
            $tabel_5_a->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-5-a');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'semester' => 'required',
            'mata_kuliah_kompetensi' => 'required',
            'sks_kuliah' => 'required',
            'sks_seminar' => 'required',
            'sks_praktikum' => 'required',
            'konversi_kredit_ke_jam' => 'required',
            'capaian_pembelajaran_sikap' => 'required',
            'capaian_pembelajaran_pengetahuan' => 'required',
            'capaian_pembelajaran_keterampilan_umum' => 'required',
            'capaian_pembelajaran_keterampilan_khusus' => 'required',
            'dokumen_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_5_a = Tabel_5_A::find($id);
            $tabel_5_a->semester = $request->semester;
            $tabel_5_a->kode_mata_kuliah = $request->kode_mata_kuliah;
            $tabel_5_a->nama_mata_kuliah = $request->nama_mata_kuliah;
            $tabel_5_a->mata_kuliah_kompetensi = $request->mata_kuliah_kompetensi;
            $tabel_5_a->sks_kuliah = $request->sks_kuliah;
            $tabel_5_a->sks_seminar = $request->sks_seminar;
            $tabel_5_a->sks_praktikum = $request->sks_praktikum;
            $tabel_5_a->konversi_kredit_ke_jam = $request->konversi_kredit_ke_jam;
            $tabel_5_a->capaian_pembelajaran_sikap = $request->capaian_pembelajaran_sikap;
            $tabel_5_a->capaian_pembelajaran_pengetahuan = $request->capaian_pembelajaran_pengetahuan;
            $tabel_5_a->capaian_pembelajaran_keterampilan_umum = $request->capaian_pembelajaran_keterampilan_umum;
            $tabel_5_a->capaian_pembelajaran_keterampilan_khusus = $request->capaian_pembelajaran_keterampilan_khusus;
            $tabel_5_a->dokumen_rencana_pembelajaran = $request->dokumen_rencana_pembelajaran;
            $tabel_5_a->unit_penyelenggara = $request->unit_penyelenggara;
            $tabel_5_a->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-5-a');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_5_a = Tabel_5_A::find($id);
        $tabel_5_a->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-5-a');
    }
}
