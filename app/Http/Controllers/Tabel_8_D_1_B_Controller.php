<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_D_1_B;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_8_D_1_B_Controller extends Controller
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
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required|integer',
            'jumlah_lulusan_yang_terlacak' => 'required|integer',
            'jltwtmp_wt_6_bulan' => 'required|integer',
            'jltwtmp_6_wt_18_bulan' => 'required|integer',
            'jltwtmp_wt_18_bulan' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_d_1_b = new Tabel_8_D_1_B;
            $tabel_8_d_1_b->tahun_lulus = $request->tahun_lulus;
            $tabel_8_d_1_b->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_d_1_b->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_d_1_b->jltwtmp_wt_3_bulan = $request->jltwtmp_wt_6_bulan;
            $tabel_8_d_1_b->jltwtmp_3_wt_6_bulan = $request->jltwtmp_6_wt_18_bulan;
            $tabel_8_d_1_b->jltwtmp_wt_6_bulan = $request->jltwtmp_wt_18_bulan;
            $tabel_8_d_1_b->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-d-1-b');
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
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required|integer',
            'jumlah_lulusan_yang_terlacak' => 'required|integer',
            'jltwtmp_wt_6_bulan' => 'required|integer',
            'jltwtmp_6_wt_18_bulan' => 'required|integer',
            'jltwtmp_wt_18_bulan' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_d_1_b = Tabel_8_D_1_B::find($id);
            $tabel_8_d_1_b->tahun_lulus = $request->tahun_lulus;
            $tabel_8_d_1_b->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_d_1_b->jumlah_lulusan_yang_terlacak = $request->jumlah_lulusan_yang_terlacak;
            $tabel_8_d_1_b->jltwtmp_wt_3_bulan = $request->jltwtmp_wt_6_bulan;
            $tabel_8_d_1_b->jltwtmp_3_wt_6_bulan = $request->jltwtmp_6_wt_18_bulan;
            $tabel_8_d_1_b->jltwtmp_wt_6_bulan = $request->jltwtmp_wt_18_bulan;
            $tabel_8_d_1_b->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-d-1-b');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_d_1_b = Tabel_8_D_1_B::find($id);
        $tabel_8_d_1_b->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-d-1-b');
    }
}
