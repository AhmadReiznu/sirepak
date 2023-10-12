<?php

namespace App\Http\Controllers;

use App\Models\Tabel_8_A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_8_A_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_8_A::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-8-a.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-8-a.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-8-a.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-8-a.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required',
            'ipk_min' => 'required',
            'ipk_rata_rata' => 'required',
            'ipk_maks' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_8_a = new Tabel_8_A;
            $tabel_8_a->tahun_lulus = $request->tahun_lulus;
            $tabel_8_a->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_a->ipk_min = $request->ipk_min;
            $tabel_8_a->ipk_rata_rata = $request->ipk_rata_rata;
            $tabel_8_a->ipk_maks = $request->ipk_maks;
            $tabel_8_a->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-8-a');
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
        $tabel_8_a = Tabel_8_A::find($id);
        return view('tabel-8-a.edit', compact('tabel_8_a'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'tahun_lulus' => 'required',
            'jumlah_lulusan' => 'required',
            'ipk_min' => 'required',
            'ipk_rata_rata' => 'required',
            'ipk_maks' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_8_a = Tabel_8_A::find($id);
            $tabel_8_a->tahun_lulus = $request->tahun_lulus;
            $tabel_8_a->jumlah_lulusan = $request->jumlah_lulusan;
            $tabel_8_a->ipk_min = $request->ipk_min;
            $tabel_8_a->ipk_rata_rata = $request->ipk_rata_rata;
            $tabel_8_a->ipk_maks = $request->ipk_maks;
            $tabel_8_a->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-8-a');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_8_a = Tabel_8_A::find($id);
        $tabel_8_a->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-8-a');
    }
}
