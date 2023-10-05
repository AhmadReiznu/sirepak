<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_E_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_E_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'jenis_kemampuan' => 'required',
            'tkp_sangat_baik' => 'required',
            'tkp_baik' => 'required',
            'tkp_cukup' => 'required',
            'tkp_kurang' => 'required',
            'rencana_tindak_lanjut_oleh_ps' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_e_2 = new Tabel_8_E_2;
            $tabel_8_e_2->jenis_kemampuan = $request->jenis_kemampuan;
            $tabel_8_e_2->tkp_sangat_baik = $request->tkp_sangat_baik;
            $tabel_8_e_2->tkp_baik = $request->tkp_baik;
            $tabel_8_e_2->tkp_cukup = $request->tkp_cukup;
            $tabel_8_e_2->tkp_kurang = $request->tkp_kurang;
            $tabel_8_e_2->rencana_tindak_lanjut_oleh_ps = $request->rencana_tindak_lanjut_oleh_ps;
            $tabel_8_e_2->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-e-2');
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
        $rules = [
            'jenis_kemampuan' => 'required',
            'tkp_sangat_baik' => 'required',
            'tkp_baik' => 'required',
            'tkp_cukup' => 'required',
            'tkp_kurang' => 'required',
            'rencana_tindak_lanjut_oleh_ps' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_e_2 = Tabel_8_E_2::find($id);
            $tabel_8_e_2->jenis_kemampuan = $request->jenis_kemampuan;
            $tabel_8_e_2->tkp_sangat_baik = $request->tkp_sangat_baik;
            $tabel_8_e_2->tkp_baik = $request->tkp_baik;
            $tabel_8_e_2->tkp_cukup = $request->tkp_cukup;
            $tabel_8_e_2->tkp_kurang = $request->tkp_kurang;
            $tabel_8_e_2->rencana_tindak_lanjut_oleh_ps = $request->rencana_tindak_lanjut_oleh_ps;
            $tabel_8_e_2->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-e-2');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_e_2 = Tabel_8_E_2::find($id);
        $tabel_8_e_2->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-e-2');
    }
}
