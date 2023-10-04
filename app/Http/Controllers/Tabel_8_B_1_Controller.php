<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_B_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_B_1_Controller extends Controller
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
            'nama_kegiatan' => 'required',
            'waktu_perolehan' => 'required',
            'tingkat' => 'required',
            'prestasi_yang_dicapai' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_b_1 = new Tabel_8_B_1;
            $tabel_8_b_1->nama_kegiatan = $request->nama_kegiatan;
            $tabel_8_b_1->waktu_perolehan = $request->waktu_perolehan;
            $tabel_8_b_1->tingkat = $request->tingkat;
            $tabel_8_b_1->prestasi_yang_dicapai = $request->prestasi_yang_dicapai;
            $tabel_8_b_1->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-b-1');
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
            'nama_kegiatan' => 'required',
            'waktu_perolehan' => 'required',
            'tingkat' => 'required',
            'prestasi_yang_dicapai' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_b_1 = Tabel_8_B_1::find($id);
            $tabel_8_b_1->nama_kegiatan = $request->nama_kegiatan;
            $tabel_8_b_1->waktu_perolehan = $request->waktu_perolehan;
            $tabel_8_b_1->tingkat = $request->tingkat;
            $tabel_8_b_1->prestasi_yang_dicapai = $request->prestasi_yang_dicapai;
            $tabel_8_b_1->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-b-1');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_b_1 = Tabel_8_B_1::find($id);
        $tabel_8_b_1->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-b-1');
    }
}
