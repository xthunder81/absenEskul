<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class LoginAdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $user = Admin::where(['username' => $request->username,
                            'password' => $request->password
                            ])->first();

        if($user) {
            session(['login_username' => $user->username,
                    'login_id' => $user->id,
                    'login_password' => $user->password,
                    'login_nip' => $user->nip,
                    'login_nama' => $user->nama_admin,
            ]);
            $request->session()->flash('status', 'Login Sukses');
            return redirect('/test');
        }
        else {
            $request->session()->flash('status', 'Masukkan Password dengan Benar!!');
			return redirect('/admin');
        }
    }

    function logout(Request $request){
        $request->session()->flush();
        return redirect();
   }
}
