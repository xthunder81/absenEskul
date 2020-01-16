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
        $admin = Admin::where(['username' => $request->username,
                            'password' => $request->password
                            ])->first();

        if($admin) {
            session(['login_username' => $admin->username,
                    'login_id' => $admin->id,
                    'login_password' => $admin->password,
                    'login_nip' => $admin->nip,
                    'login_nama' => $admin->nama_admin,
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
        return redirect('/');
   }
}
