<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use App\Models\Tabel_1_1;
use App\Models\Tabel_1_2;
use App\Models\Tabel_1_3;
use App\Models\Tabel_2_A;
use App\Models\Tabel_2_B;
use App\Models\Tabel_3_A_1;
use App\Models\Tabel_3_A_2;
use App\Models\Tabel_3_A_3;
use App\Models\Tabel_3_A_4;
use App\Models\Tabel_3_A_5;
use App\Models\Tabel_3_B_1;
use App\Models\Tabel_3_B_2;
use App\Models\Tabel_3_B_3;
use App\Models\Tabel_3_B_4_1;
use App\Models\Tabel_3_B_4_2;
use App\Models\Tabel_3_B_5;
use App\Models\Tabel_3_B_6;
use App\Models\Tabel_3_B_7_1;
use App\Models\Tabel_3_B_7_2;
use App\Models\Tabel_3_B_7_3;
use App\Models\Tabel_3_B_7_4;
use App\Models\Tabel_4;
use App\Models\Tabel_5_A;
use App\Models\Tabel_5_B;
use App\Models\Tabel_5_C;
use App\Models\Tabel_6_A;
use App\Models\Tabel_6_B;
use App\Models\Tabel_7;
use App\Models\Tabel_8_A;
use App\Models\Tabel_8_B_1;
use App\Models\Tabel_8_B_2;
use App\Models\Tabel_8_C_1;
use App\Models\Tabel_8_C_2;
use App\Models\Tabel_8_C_3;
use App\Models\Tabel_8_C_4;
use App\Models\Tabel_8_D_1_A;
use App\Models\Tabel_8_D_1_B;
use App\Models\Tabel_8_D_1_C;
use App\Models\Tabel_8_D_2;
use App\Models\Tabel_8_E_1;
use App\Models\Tabel_8_E_2;
use App\Models\Tabel_8_F_1_1;
use App\Models\Tabel_8_F_1_2;
use App\Models\Tabel_8_F_2;
use App\Models\Tabel_8_F_3;
use App\Models\Tabel_8_F_4_1;
use App\Models\Tabel_8_F_4_2;
use App\Models\Tabel_8_F_4_3;
use App\Models\Tabel_8_F_4_4;
use App\Models\Tabel_Ref_8_E_2;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Request $request
    public function index()
    {
        $tabel_1_1 = Tabel_1_1::count();
        $tabel_1_2 = Tabel_1_2::count();
        $tabel_1_3 = Tabel_1_3::count();
        $tabel_2_a = Tabel_2_A::count();
        $tabel_2_b = Tabel_2_B::count();
        $tabel_3_a_1 = Tabel_3_A_1::count();
        $tabel_3_a_2 = Tabel_3_A_2::count();
        $tabel_3_a_3 = Tabel_3_A_3::count();
        $tabel_3_a_4 = Tabel_3_A_4::count();
        $tabel_3_a_5 = Tabel_3_A_5::count();
        $tabel_3_b_1 = Tabel_3_B_1::count();
        $tabel_3_b_2 = Tabel_3_B_2::count();
        $tabel_3_b_3 = Tabel_3_B_3::count();
        $tabel_3_b_4_1 = Tabel_3_B_4_1::count();
        $tabel_3_b_4_2 = Tabel_3_B_4_2::count();
        $tabel_3_b_5 = Tabel_3_B_5::count();
        $tabel_3_b_6 = Tabel_3_B_6::count();
        $tabel_3_b_7_1 = Tabel_3_B_7_1::count();
        $tabel_3_b_7_2 = Tabel_3_B_7_2::count();
        $tabel_3_b_7_3 = Tabel_3_B_7_3::count();
        $tabel_3_b_7_4 = Tabel_3_B_7_4::count();
        $tabel_4 = Tabel_4::count();
        $tabel_5_a = Tabel_5_A::count();
        $tabel_5_b = Tabel_5_B::count();
        $tabel_5_c = Tabel_5_C::count();
        $tabel_6_a = Tabel_6_A::count();
        $tabel_6_b = Tabel_6_B::count();
        $tabel_7 = Tabel_7::count();
        $tabel_8_a = Tabel_8_A::count();
        $tabel_8_b_1 = Tabel_8_B_1::count();
        $tabel_8_b_2 = Tabel_8_B_2::count();
        $tabel_8_c_1 = Tabel_8_C_1::count();
        $tabel_8_c_2 = Tabel_8_C_2::count();
        $tabel_8_c_3 = Tabel_8_C_3::count();
        $tabel_8_c_4 = Tabel_8_C_4::count();
        $tabel_8_d_1_a = Tabel_8_D_1_A::count();
        $tabel_8_d_1_b = Tabel_8_D_1_B::count();
        $tabel_8_d_1_c = Tabel_8_D_1_C::count();
        $tabel_8_d_2 = Tabel_8_D_2::count();
        $tabel_8_e_1 = Tabel_8_E_1::count();
        $tabel_8_e_2 = Tabel_8_E_2::count();
        $tabel_8_f_1_1 = Tabel_8_F_1_1::count();
        $tabel_8_f_1_2 = Tabel_8_F_1_2::count();
        $tabel_8_f_2 = Tabel_8_F_2::count();
        $tabel_8_f_3 = Tabel_8_F_3::count();
        $tabel_8_f_4_1 = Tabel_8_F_4_1::count();
        $tabel_8_f_4_2 = Tabel_8_F_4_2::count();
        $tabel_8_f_4_3 = Tabel_8_F_4_3::count();
        $tabel_8_f_4_4 = Tabel_8_F_4_4::count();
        $tabel_ref_8_e_2 = Tabel_Ref_8_E_2::count();
        $user = User::count();

        return view('dashboard', [
            'tabel_1_1' => $tabel_1_1,
            'tabel_1_2' => $tabel_1_2,
            'tabel_1_3' => $tabel_1_3,
            'tabel_2_a' => $tabel_2_a,
            'tabel_2_b' => $tabel_2_b,
            'tabel_3_a_1' => $tabel_3_a_1,
            'tabel_3_a_2' => $tabel_3_a_2,
            'tabel_3_a_3' => $tabel_3_a_3,
            'tabel_3_a_4' => $tabel_3_a_4,
            'tabel_3_a_5' => $tabel_3_a_5,
            'tabel_3_b_1' => $tabel_3_b_1,
            'tabel_3_b_2' => $tabel_3_b_2,
            'tabel_3_b_3' => $tabel_3_b_3,
            'tabel_3_b_4_1' => $tabel_3_b_4_1,
            'tabel_3_b_4_2' => $tabel_3_b_4_2,
            'tabel_3_b_5' => $tabel_3_b_5,
            'tabel_3_b_6' => $tabel_3_b_6,
            'tabel_3_b_7_1' => $tabel_3_b_7_1,
            'tabel_3_b_7_2' => $tabel_3_b_7_2,
            'tabel_3_b_7_3' => $tabel_3_b_7_3,
            'tabel_3_b_7_4' => $tabel_3_b_7_4,
            'tabel_4' => $tabel_4,
            'tabel_5_a' => $tabel_5_a,
            'tabel_5_b' => $tabel_5_b,
            'tabel_5_c' => $tabel_5_c,
            'tabel_6_a' => $tabel_6_a,
            'tabel_6_b' => $tabel_6_b,
            'tabel_7' => $tabel_7,
            'tabel_8_a' => $tabel_8_a,
            'tabel_8_b_1' => $tabel_8_b_1,
            'tabel_8_b_2' => $tabel_8_b_2,
            'tabel_8_c_1' => $tabel_8_c_1,
            'tabel_8_c_2' => $tabel_8_c_2,
            'tabel_8_c_3' => $tabel_8_c_3,
            'tabel_8_c_4' => $tabel_8_c_4,
            'tabel_8_d_1_a' => $tabel_8_d_1_a,
            'tabel_8_d_1_b' => $tabel_8_d_1_b,
            'tabel_8_d_1_c' => $tabel_8_d_1_c,
            'tabel_8_d_2' => $tabel_8_d_2,
            'tabel_8_e_1' => $tabel_8_e_1,
            'tabel_8_e_2' => $tabel_8_e_2,
            'tabel_8_f_1_1' => $tabel_8_f_1_1,
            'tabel_8_f_1_2' => $tabel_8_f_1_2,
            'tabel_8_f_2' => $tabel_8_f_2,
            'tabel_8_f_3' => $tabel_8_f_3,
            'tabel_8_f_4_1' => $tabel_8_f_4_1,
            'tabel_8_f_4_2' => $tabel_8_f_4_2,
            'tabel_8_f_4_3' => $tabel_8_f_4_3,
            'tabel_8_f_4_4' => $tabel_8_f_4_4,
            'tabel_ref_8_e_2' => $tabel_ref_8_e_2,
            'user' => $user,
        ]);
    }

    // public function root()
    // {
    //     return view('index');
    // }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function FormSubmit(Request $request)
    {
        return view('form-repeater');
    }
}
