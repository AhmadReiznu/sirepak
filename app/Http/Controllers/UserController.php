<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('logic-test.index', compact('users'));
    }

    public function create()
    {
        return view('logic-test.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];

        $validator = Validator::make($data, $rules);

        // process the login
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator);
        } else {
            // store
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // redirect
            Session::flash('message', 'Successfully created!');
            return redirect('/users');
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return redirect('/users');
    }
}
