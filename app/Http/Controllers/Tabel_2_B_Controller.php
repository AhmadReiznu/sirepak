<?php

namespace App\Http\Controllers;

use App\Models\Tabel_2_B;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_2_B_Controller extends Controller
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
        //
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
