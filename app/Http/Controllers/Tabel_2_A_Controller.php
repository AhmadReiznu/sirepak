<?php

namespace App\Http\Controllers;

use App\Models\Tabel_2_A;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Tabel_2_A_Controller extends Controller
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
            'tahun_akademik' => 'required',
            'daya_tampung' => 'required|integer',
            'jumlah_calon_mahasiswa_pendaftar' => 'required|integer',
            'jumlah_calon_mahasiswa_lulus_seleksi' => 'required|integer',
            'jumlah_mahasiswa_baru_reguler' => 'required|integer',
            'jumlah_mahasiswa_baru_transfer' => 'required|integer',
            'jumlah_mahasiswa_aktif_reguler' => 'required|integer',
            'jumlah_mahasiswa_aktif_transfer' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_2_a = new Tabel_2_A;
            $tabel_2_a->tahun_akademik = $request->tahun_akademik;
            $tabel_2_a->daya_tampung = $request->daya_tampung;
            $tabel_2_a->jumlah_calon_mahasiswa_pendaftar = $request->jumlah_calon_mahasiswa_pendaftar;
            $tabel_2_a->jumlah_calon_mahasiswa_lulus_seleksi = $request->jumlah_calon_mahasiswa_lulus_seleksi;
            $tabel_2_a->jumlah_mahasiswa_baru_reguler = $request->jumlah_mahasiswa_baru_reguler;
            $tabel_2_a->jumlah_mahasiswa_baru_transfer = $request->jumlah_mahasiswa_baru_transfer;
            $tabel_2_a->jumlah_mahasiswa_aktif_reguler = $request->jumlah_mahasiswa_aktif_reguler;
            $tabel_2_a->jumlah_mahasiswa_aktif_transfer = $request->jumlah_mahasiswa_aktif_transfer;
            $tabel_2_a->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-2-a');
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
            'tahun_akademik' => 'required',
            'daya_tampung' => 'required|integer',
            'jumlah_calon_mahasiswa_pendaftar' => 'required|integer',
            'jumlah_calon_mahasiswa_lulus_seleksi' => 'required|integer',
            'jumlah_mahasiswa_baru_reguler' => 'required|integer',
            'jumlah_mahasiswa_baru_transfer' => 'required|integer',
            'jumlah_mahasiswa_aktif_reguler' => 'required|integer',
            'jumlah_mahasiswa_aktif_transfer' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_2_a = Tabel_2_A::find($id);
            $tabel_2_a->tahun_akademik = $request->tahun_akademik;
            $tabel_2_a->daya_tampung = $request->daya_tampung;
            $tabel_2_a->jumlah_calon_mahasiswa_pendaftar = $request->jumlah_calon_mahasiswa_pendaftar;
            $tabel_2_a->jumlah_calon_mahasiswa_lulus_seleksi = $request->jumlah_calon_mahasiswa_lulus_seleksi;
            $tabel_2_a->jumlah_mahasiswa_baru_reguler = $request->jumlah_mahasiswa_baru_reguler;
            $tabel_2_a->jumlah_mahasiswa_baru_transfer = $request->jumlah_mahasiswa_baru_transfer;
            $tabel_2_a->jumlah_mahasiswa_aktif_reguler = $request->jumlah_mahasiswa_aktif_reguler;
            $tabel_2_a->jumlah_mahasiswa_aktif_transfer = $request->jumlah_mahasiswa_aktif_transfer;
            $tabel_2_a->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-2-a');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_2_a = Tabel_2_A::find($id);
        $tabel_2_a->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-2-a');
    }
}
