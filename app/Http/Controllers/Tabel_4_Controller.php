<?php

namespace App\Http\Controllers;

use App\Models\Tabel_4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class Tabel_4_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tabel_4::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <form class="inline-block" action="' . route('tabel-4.destroy', $row->id) . '" method="POST" onsubmit="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                        <a href="' . route("tabel-4.edit", $row->id) . ' " . class="edit btn btn-success btn-sm">
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
        return view('tabel-4.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tabel-4.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'jenis_penggunaan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            $tabel_4 = new Tabel_4;
            $tabel_4->jenis_penggunaan = $request->jenis_penggunaan;
            $tabel_4->unit_pengelola_program_studi_ts_2 = $request->unit_pengelola_program_studi_ts_2;
            $tabel_4->unit_pengelola_program_studi_ts_1 = $request->unit_pengelola_program_studi_ts_1;
            $tabel_4->unit_pengelola_program_studi_ts = $request->unit_pengelola_program_studi_ts;

            $bagi_1 = 0;
            if ($request->unit_pengelola_program_studi_ts_2 != 0) {
                $bagi_1++;
            }
            if ($request->unit_pengelola_program_studi_ts_1 != 0) {
                $bagi_1++;
            }
            if ($request->unit_pengelola_program_studi_ts != 0) {
                $bagi_1++;
            }

            if ($bagi_1 != 0) {
                $tabel_4->rata_rata_1 = ($request->unit_pengelola_program_studi_ts_2 +
                    $request->unit_pengelola_program_studi_ts_1 +
                    $request->unit_pengelola_program_studi_ts
                ) / $bagi_1;
            } else {
                $tabel_4->rata_rata_1 = ($request->unit_pengelola_program_studi_ts_2 +
                    $request->unit_pengelola_program_studi_ts_1 +
                    $request->unit_pengelola_program_studi_ts
                ) / 3;
            }

            $tabel_4->program_studi_ts_2 = $request->program_studi_ts_2;
            $tabel_4->program_studi_ts_1 = $request->program_studi_ts_1;
            $tabel_4->program_studi_ts = $request->program_studi_ts;

            $bagi_2 = 0;
            if ($request->program_studi_ts_2 != 0) {
                $bagi_2++;
            }
            if ($request->program_studi_ts_1 != 0) {
                $bagi_2++;
            }
            if ($request->program_studi_ts != 0) {
                $bagi_2++;
            }

            if ($bagi_2 != 0) {
                $tabel_4->rata_rata_2 = ($request->program_studi_ts_2 +
                    $request->program_studi_ts_1 +
                    $request->program_studi_ts
                ) / $bagi_2;
            } else {
                $tabel_4->rata_rata_2 = ($request->program_studi_ts_2 +
                    $request->program_studi_ts_1 +
                    $request->program_studi_ts
                ) / 3;
            }

            $tabel_4->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/tabel-4');
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
        $tabel_4 = Tabel_4::find($id);
        return view('tabel-4.edit', compact('tabel_4'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $rules = [
            'jenis_penggunaan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // update
            $tabel_4 = Tabel_4::find($id);
            $tabel_4->jenis_penggunaan = $request->jenis_penggunaan;
            $tabel_4->unit_pengelola_program_studi_ts_2 = $request->unit_pengelola_program_studi_ts_2;
            $tabel_4->unit_pengelola_program_studi_ts_1 = $request->unit_pengelola_program_studi_ts_1;
            $tabel_4->unit_pengelola_program_studi_ts = $request->unit_pengelola_program_studi_ts;

            $bagi_1 = 0;
            if ($request->unit_pengelola_program_studi_ts_2 != 0) {
                $bagi_1++;
            }
            if ($request->unit_pengelola_program_studi_ts_1 != 0) {
                $bagi_1++;
            }
            if ($request->unit_pengelola_program_studi_ts != 0) {
                $bagi_1++;
            }

            if ($bagi_1 != 0) {
                $tabel_4->rata_rata_1 = ($request->unit_pengelola_program_studi_ts_2 +
                    $request->unit_pengelola_program_studi_ts_1 +
                    $request->unit_pengelola_program_studi_ts
                ) / $bagi_1;
            } else {
                $tabel_4->rata_rata_1 = ($request->unit_pengelola_program_studi_ts_2 +
                    $request->unit_pengelola_program_studi_ts_1 +
                    $request->unit_pengelola_program_studi_ts
                ) / 3;
            }

            $tabel_4->program_studi_ts_2 = $request->program_studi_ts_2;
            $tabel_4->program_studi_ts_1 = $request->program_studi_ts_1;
            $tabel_4->program_studi_ts = $request->program_studi_ts;

            $bagi_2 = 0;
            if ($request->program_studi_ts_2 != 0) {
                $bagi_2++;
            }
            if ($request->program_studi_ts_1 != 0) {
                $bagi_2++;
            }
            if ($request->program_studi_ts != 0) {
                $bagi_2++;
            }

            if ($bagi_2 != 0) {
                $tabel_4->rata_rata_2 = ($request->program_studi_ts_2 +
                    $request->program_studi_ts_1 +
                    $request->program_studi_ts
                ) / $bagi_2;
            } else {
                $tabel_4->rata_rata_2 = ($request->program_studi_ts_2 +
                    $request->program_studi_ts_1 +
                    $request->program_studi_ts
                ) / 3;
            }
            $tabel_4->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return redirect('/tabel-4');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tabel_4 = Tabel_4::find($id);
        $tabel_4->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/tabel-4');
    }
}
