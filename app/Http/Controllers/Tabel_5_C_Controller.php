<?php

namespace App\Http\Controllers;

use App\Models\Tabel_5_C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_5_C_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_5_C::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-5-c.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-5-c.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-5-c.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-5-c.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'aspek_yang_diukur' => 'required',
            'tkm_sangat_baik' => 'required',
            'tkm_baik' => 'required',
            'tkm_cukup' => 'required',
            'tkm_kurang' => 'required',
            'rencana_tindak_lanjut_oleh_ps' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_5_c = new Tabel_5_C;
            $tabel_5_c->aspek_yang_diukur = $request->aspek_yang_diukur;
            $tabel_5_c->tkm_sangat_baik = $request->tkm_sangat_baik;
            $tabel_5_c->tkm_baik = $request->tkm_baik;
            $tabel_5_c->tkm_cukup = $request->tkm_cukup;
            $tabel_5_c->tkm_kurang = $request->tkm_kurang;
            $tabel_5_c->rencana_tindak_lanjut_oleh_ps = $request->rencana_tindak_lanjut_oleh_ps;
            $tabel_5_c->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-5-c');
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
        $tabel_5_c = Tabel_5_C::find($id);
        return view('tabel-5-c.edit', compact('tabel_5_c'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'aspek_yang_diukur' => 'required',
            'tkm_sangat_baik' => 'required',
            'tkm_baik' => 'required',
            'tkm_cukup' => 'required',
            'tkm_kurang' => 'required',
            'rencana_tindak_lanjut_oleh_ps' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_5_c = Tabel_5_C::find($id);
            $tabel_5_c->aspek_yang_diukur = $request->aspek_yang_diukur;
            $tabel_5_c->tkm_sangat_baik = $request->tkm_sangat_baik;
            $tabel_5_c->tkm_baik = $request->tkm_baik;
            $tabel_5_c->tkm_cukup = $request->tkm_cukup;
            $tabel_5_c->tkm_kurang = $request->tkm_kurang;
            $tabel_5_c->rencana_tindak_lanjut_oleh_ps = $request->rencana_tindak_lanjut_oleh_ps;
            $tabel_5_c->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-5-c');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_5_c = Tabel_5_C::find($id);
        $tabel_5_c->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-5-c');
    }
}
